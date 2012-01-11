<h3>About</h3>
<p>Carbogrid is a CRUD (Create-Update-Delete) extension for the Codeigniter PHP framework.</p>
<p>You just have to write a few lines to have a complete CRUD: view your data in a feature rich datagrid, add/edit data with the automatically generated forms, which, of course, are validated based on the given settings.</p>
<p>Carbigrid has a lot of customization options, you can enable/disable features, customize form validation, add custom actions, use complex custom database queries instead of the generated one, and much more (see <a href="http://code.google.com/p/carbogrid/wiki/Documentation">Documentation</a>).</p>

<h3>What makes Carbogrid different?</h3>
<p>Of course there are other well written, feature rich CRUD libraries for Codeigniter. But I needed some features I did not found in any of these libraries.</p>
<p>First of all I needed a datagrid with history support, so I can navigate back and forth between grid states, and be able to send, copy and paste URLs with the exact state of the grid(s).</p>
<p>The second requirment was that the grid must work even on browsers with JavaScript disabled. So Carbogrid is built using the <a href="http://en.wikipedia.org/wiki/Progressive_enhancement" target="_blank">progressive enhancement strategy</a></p>


<h3>Features</h3>
<ul class="ui-widget">
    <li>Pagination</li>
    <li>Single or multicolumn sorting
    <li>Filtering by column (operators: =, !=, &lt;, &lt;=, &gt;, &gt;=, like, not like, starts, ends)</li>
    <li>Show/hide columns</li>
    <li>Themeable (jQuery UI ThemeRoller ready)</li>
    <li>Column types: string, boolean, date, time, datetime</li>
    <li>Query generation for select/insert/update/delete for relative simple scenearios (one base table + 1 level join)</li>
    <li>Populate grid with custom datasource</li>
    <li>Custom actions: define an action url, and an icon, which will appear in the actions column and will be called with the row's id as parameter</li>
    <li>Action permissions: restrict action to certain rows only by filters</li>
    <li><b>Full Ajax state &amp; history tracking (pagination, sorting, filtering) - copy &amp; paste urls</b></li>
    <li><b>Full functionality and (almost) the same look &amp; feel without javascript</b></li>
    <li>Browser Support: IE6+, Firefox, Chrome, Opera, Safari</li>
</ul>

<h3>Requierments</h3>
<ul class="ui-widget">
    <li>CodeIgniter >= 2.0</li>
    <li>jQuery >= 1.6</li>
    <li>jQuery UI >= 1.8</li>
</ul>

<h3>License</h3>

<ul class="ui-widget">
    <li>Released under the <a href="http://www.opensource.org/licenses/mit-license.php" target="_blank">MIT License</a></li>
</ul>

<h3>Download, Documentation and Issue Tracking</h3>

<ul class="ui-widget">
    <li><a href="http://code.google.com/p/carbogrid/" target="_blank">Carbogrid @ Google Code</a></li>
</ul>

<h3>Thanks To</h3>
<ul class="ui-widget">
    <li>The <a href="http://codeigniter.com" target="_blank">CodeIgniter</a> team</li>
    <li>The <a href="http://jquery.com" target="_blank">jQuery</a> and <a href="http://jqueryui.com" target="_blank">jQuery UI</a> team</li>
    <li>The <a href="http://benalman.com/projects/jquery-bbq-plugin/" target="_blank">jQuery BBQ plugin</a> by Ben Alman</li>
    <li>The <a href="http://jquery.malsup.com/form" target="_blank">jQuery Form plugin</a></li>
</ul>


