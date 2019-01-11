<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
        <h3>$Subtitle</h3>
        <% with $Photo %>
        <img class="article--image" src="$URL" alt="something should go here, possible alt generator via CMS" width="$Width" height="$Height" />
        <% end_with %>
		<div class="content">$Content</div>
	</article>
		$Form
		$CommentsForm
</div>