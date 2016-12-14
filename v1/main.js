$(document).ready(function() 
{
	init();

	scroll_handler();

	setInterval(width_handler , 1000);

	experience_section_handler();

	project_section_handler();

	section_handler();
	
	setInterval(index_image_handler , 300000);

	//hover_handler();
});

/*function hover_handler()
{
	$('.iiav').hover(function(){
	    $('.iiav').css("border-color","red");
	},function(){
	    $('.iiav').css("border-color","blue");
	});
}*/

function index_image_handler()
{
    var container_width = $("#main_container").width();
    var img_width;
    var img_height;
    var div_height; 
    var img_divider;
    var img_margin;
    var margin_space;
    var caption_size;
    var largest_height;
    var largest_hid;
    var smallest_height;
    var smallest_hid;
    var height_diff;
    var width_coefficient;
    var smallest_width;
    var smallest_wid;

    if (container_width >= 800)
    {
    	img_divider = 3;
    	img_margin = 8;
    	margin_space = img_divider*2*img_margin;
    	caption_size = 12;
    }
    else
   	if ( (container_width < 800) && (container_width >= 400) )
   	{
   		img_divider = 2;
    	img_margin = 7;
    	margin_space = img_divider*2*img_margin;
    	caption_size = 12;
   	}
   	else
   	if (container_width < 400)
   	{
   		img_divider = 1;
    	img_margin = 5;
    	margin_space = img_divider*2*img_margin;
    	caption_size = 12;
   	}
  
  	container_space = container_width-margin_space-20; 
    img_width = ((container_space)/img_divider);

    var id_arr = [];
    var img_arr = [];
    var title_arr = [];
    var width_arr = [];
    var height_arr = [];
    var caption_arr = [];
    var youtube_enable_arr = [];
    var youtube_link_arr = [];
    var assigned_width = [];
    var alt = 'Error';
    
    $.ajax({
        type: 'GET',
        url: 'image.xml',
        dataType: 'xml',
        success: function (xml) 
        {
            $(xml).find('ref').each(function () 
            {
                id = $(this).find('id').text();
                id_arr.push(id.toString());

                img = $(this).find('image').text();
                img_arr.push(img.toString());

                title = $(this).find('title').text();
                title_arr.push(title.toString());

                width = $(this).find('width').text();
                width_arr.push(width.toString());

                height = $(this).find('height').text();
                height_arr.push(height.toString());

                caption = $(this).find('caption').text();
                caption_arr.push(caption.toString());

                youtube_enable = $(this).find('youtube').text();
                youtube_enable_arr.push(youtube_enable.toString());

                youtube_link = $(this).find('youtube_link').text();
                youtube_link_arr.push(youtube_link.toString());

                assigned_width.push(img_width.toString());
            });

            $('#dynamic_image_div').empty();

			//alert(img_divider);
			//alert(id_arr.length);

            for (i = 0; i < id_arr.length; i++)
            {
                if ( (i % img_divider) == 0 )
                {
	                largest_height = 0;
	                smallest_height = 100000;
	                smallest_width = 100000;

	                for (j = 0; j < img_divider; j++)
	                {
	                	//alert(height_arr[i+j]/width_arr[i+j]*assigned_width[i+j]);

	                	if ( (height_arr[i+j]/width_arr[i+j]*100) > largest_height) 
	                	{
	                		//largest_height = height_arr[i+j];
	                		largest_hid = i+j;
	                	}

	                	if ( (height_arr[i+j]/width_arr[i+j]*100) < smallest_height)
	                	{
	                		//smallest_height = height_arr[i+j];
	                		smallest_hid = i+j;
	                	}

	                	if ( (width_arr[i+j]/height_arr[i+j]*100) < smallest_width)
	                	{
	                		//smallest_width = width_arr[i+j];
	                		smallest_wid = i+j;
	                	}
	                }

	                //height_diff = largest_height - smallest_height;

	                //alert(height_diff); 
					//alert("smallest wid: " + smallest_wid);

					width_coefficient = 1;

					for (k = 0; k < img_divider; k++)
	                {
	                	if ( ( (i+k) !== smallest_wid ) && ( (i+k) < id_arr.length ) )
	                	{
	                		assigned_width[i+k] = ( width_arr[i+k]/height_arr[i+k] ) * ( height_arr[smallest_wid]/width_arr[smallest_wid]*assigned_width[smallest_wid] );
	                		width_coefficient = width_coefficient + ( assigned_width[i+k]/assigned_width[smallest_wid] );
	                		
	                		//alert("width ratio(s): " + assigned_width[i+k]/assigned_width[smallest_wid]);
	                	}
	                }

	                //alert("width_coefficient: " + width_coefficient);
	                //alert("original width: "+assigned_width[smallest_wid]);
	                
	                assigned_width[smallest_wid] = Math.floor(container_space/width_coefficient);
	                
	                //alert(container_space + "/" + width_coefficient);
	                //alert("modified width: "+assigned_width[smallest_wid]);
	                
	                var cumulative = assigned_width[smallest_wid];

	                for (k = 0; k < img_divider; k++)
	                {
	                	if ( (i+k) !== smallest_hid )
	                	{
	                		assigned_width[i+k] = Math.floor( ((width_arr[i+k]/height_arr[i+k])*(height_arr[smallest_hid]/width_arr[smallest_hid]*assigned_width[smallest_hid])) );
	                		cumulative = cumulative + assigned_width[i+k];
	                	}
	                }

	                //alert("#: " + img_divider + 
	                // 	  " cumu: " + cumulative + 
	                //	  " margin: " + margin_space + 
	                //	  " ratio: " + width_coefficient + 
	                //	  " width: " + container_width);
	            }

                img_height = ( (height_arr[i]/width_arr[i])*assigned_width[i] );
                div_height = img_height + 25;

                if (youtube_enable_arr[i] == "0")
            	{
	                $("#dynamic_image_div").append('<div class="iiav" id="img_'+i+'" style="font-size: '+caption_size+'px; display: inline-block; text-align: center; margin:'+img_margin+'px; width:'+assigned_width[i]+'px; height:'+div_height+'px;">'+caption_arr[i]+'</div>');
	                $('<img>')
	                    .attr('src', "" + img_arr[i] + "")        
		                    .attr('title', title_arr[i])
		                    .attr('alt', alt)
		                    .width(assigned_width[i]).height(img_height)
		                .prependTo($('#img_'+i)); 
            	}
            	else
            	if (youtube_enable_arr[i] == "1")
            	{
	                $("#dynamic_image_div").append('<div class="iiav" id="img_'+i+'" style="font-size: '+caption_size+'px; display: inline-block; text-align: center; margin:'+img_margin+'px; width:'+assigned_width[i]+'px; height:'+div_height+'px;">'+caption_arr[i]+'</div>');
	                $("#img_"+i).prepend('<iframe src="'+youtube_link_arr[i]+'" width="'+assigned_width[i]+'" height="'+img_height+'" frameborder="0" allowfullscreen></iframe>');
            	}
            } 

        },
	    error: function (xhr, ajaxOptions, thrownError) 
	    {
	        //alert(xhr.status);
	        //alert(thrownError);
	    }
    });
}

function init()
{
	index_image_handler();

	window.previousWidth = 0;

	var Width = $(window).width();

	if (Width < 800)
	{
		$('#header_title_2').hide();
		$('#header_title_1').show();
	}
	else 
	if (Width > 800)
	{
		$('#header_title_1').hide();
		$('#header_title_2').show();
	}

	//$('body').removeClass();
	//$('body').css('background-color', 'blue !important');

	$(".experience_content").hide();
	$(".project_content").hide();
	$(".section_content").hide();
}

function scroll_handler()
{
	var previousScroll = 0;

	$(window).scroll(function(event)
	{
	   var scroll = $(this).scrollTop();
	   
	   if (scroll > previousScroll && scroll > 30)
	   {
	       $("#main_title").slideUp();
	   } 
	   else 
	   if (scroll < previousScroll && scroll < 30)
	   {
	   	   $("#main_title").slideDown();
	   }
	   
	   previousScroll = scroll;
	});	
}

function width_handler()
{
	var Width = $(window).width();

	if (Width < 950 && previousWidth > 950)
	{
		$('#header_title_2').hide();
		$('#header_title_1').show();
		$('#top_space').hide();
	}
	else 
	if (Width > 950 && previousWidth < 950)
	{
		$('#header_title_1').hide();
		$('#header_title_2').show();
		$('#top_space').show();
	}

	previousWidth = Width;	
}

function experience_section_handler()
{
	$(".experience_img_btns").click(function()
	{
		//$(".experience_content").hide();
		$("#experience_content_"+this.id).slideToggle();
	});
}

function project_section_handler()
{
	$(".project_img_btns").click(function()
	{
		//$(".project_content").hide();
		$("#project_content_"+this.id).slideToggle();
	});
}

function section_handler()
{
	$(".resume_section_heading").click(function()
	{
		//$(".project_content").hide();
		$("#section_content_"+this.id).slideToggle();
	});
}