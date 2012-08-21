<?php
function smarty_cms_function_spro_gdpresent($params, &$smarty)
{
    $id   = ($params['id']);
    $width   = ($params['width']);
    $height  = ($params['height']);
	$delay	 = ($params['delay']);
	$auto	 = ($params['auto']);
    if (empty($id)) {
        // if no id is entered display warning message
        echo '<p style="color:#000; background-color:#fdaea8; border:2px solid #f00; padding:10px;">Please enter your Id string from your iframe share code</p>';
    }
    if (isset($params['id']))	
	{
		if (empty($width)) $width="480";
		if (empty($height)) $height="389";
		if (empty($delay)) $delay="3000";
		if (empty($auto)) $auto="false";
        echo '<iframe src="https://docs.google.com/presentation/embed?id=' . $id . '&amp;start=' . $auto . '&amp;loop=false&amp;delayms=' . $delay . '" frameborder="0" width="' . $width . '" height="' . $height . '"></iframe>';}
	}

function smarty_cms_help_function_spro_gdpresent()
{
?>	<h3>What does this do?</h3>
<p>
	This adds a Google Drive (docs) Presentation on your page.
</p>
<h3>How do I use it?</h3>
<p>
	Just insert the tag into your template/page like:
	<code>
		{gdpresent id="your Id string" width="number" height=&quot;number&quot;}
	</code>
	<br />
	<br />
</p>
<h3>What parameters does it take?</h3>
<p></p>
<ul>
	<li>
		<em><strong>(required)</strong> </em>
		<tt>id </tt> - Presentation Id.
	</li>
	<li>
		<em>(optional) </em>
		<tt>width </tt> - Set to 480 by default. Simply add a value like 500, no px needed.
	</li>
	<li>
		<em>(optional) </em>
		<tt>height </tt> -  Set to 389 by default. Simply add a value like 500, no px needed.</li>
	<li><em>(optional) </em> <tt>delay </tt> -  Set to 3000 milliseconds by default. Simply add a value like 500.</li>
	<li><em>(optional) </em> <tt>auto </tt> -  Auto start set to false by default. Simply add a value like true or false.</li>
</ul>
<?php
}
function smarty_cms_about_function_spro_gdpresent()
{
?>
<p>
	Author: Hector Hernandez <a href="http://www.soportepro.com" target="_blank">www.soportepro.com</a>
  <br />
  Email: i n f o at s o p o r t e p r o dot c o m
</p>
<p>Licence: GPL</p>
<p>
	Version: 0.1
</p>
<?php
}
?>