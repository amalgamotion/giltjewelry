= Installation =

  # Extract du zip file in the modules directory 
  # Enable the module in the admin settings
  # Add the filter in the input format you want to use.

= Use =

To insert a frame in a node in drupal, add the following : 

 [[[<url> width=<w> height=<h> scrolling=<yes|no|auto> className=<class> ID=<id]]]

Where
 
	url is the url of the page
	w is the width as css declaration (%,px,em) ==> Default : 100%
    h is the height as css declaration (%,px,em). if height=100% and url is in the same domain as web site, the height will be ajusted to the real height of the source ==> Default 100%
    scrolling is the scrollbar settings. Values from IFRAME tag ==> default : no
	class is a CSS class ==> Default : none
    ID is the id and name of the frame ==> default : iframe<no of the frame in the node (if multiple)>
	offset is a number to add to correct (if needed) auto calculated height 
	
Only URL is required.

Don't forget to set the input format the filter has been assigned to. 