<div class="field">
    <label for="custom_head_content">&lt;head&gt; custom content:</label>
    <div class="inputs">
        <textarea name="custom_head_content" id="custom_head_content" rows="10" class="textinput"><?php echo html_escape(get_option('custom_head_content')); ?></textarea>
        <p class="explanation">Add here any HTML, CSS or JavaScript content you wish to include in the <code>&lt;head&gt;</code> section of the public pages. This may include, for example, analytics tracking codes, external CSS styles, or JavaScript libraries.</p>
    </div>
</div>

<div class="field">
    <label for="custom_body_content">&lt;/body&gt; custom content:</label>
    <div class="inputs">
        <textarea name="custom_body_content" id="custom_body_content" rows="10" class="textinput"><?php echo html_escape(get_option('custom_body_content')); ?></textarea>
        <p class="explanation">Add here any HTML, JavaScript, or other content you wish to include just before the closing <code>&lt;/body&gt;</code> tag. This is useful for scripts that need to run at the end of the page load.</p>
    </div>
</div>
