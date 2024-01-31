<div class="form-group">
    <label for="textCase">Simply enter your text and choose the case you want to convert it to.</label>
    <div class="form-fields">
    <textarea name="textcase" id="textCase" cols="30" rows="10" onKeyup="count()" onpaste="count();"
        placeholder="Type or paste your content here" autofocus></textarea>
        <?php include('input_icons.php'); ?>
    </div>
    <div class="count-text" style="justify-content: space-between;display: flex;margin-top: 10px;gap: 15px;align-items: center;">
        <div>Character Count: <span id="count_character">0</span></div>
        <div>Word Count: <span id="count_">0</span></div>
    </div>
    <div class="sub-btns" style="justify-content: center;display: flex;margin-top: 20px;gap: 15px;align-items: center;">
        <button id="toggle_case" type="button">tOGGLE cASE</button>
        <button id="sentence_case" type="button">Sentence Case</button>
        <button id="lower_case" type="button">lower case</button>
        <button id="upper_case" type="button">UPPER CASE</button>
        <button id="capitalized_case" type="button">Capitalize Word</button>
        <button id="alternating_case" type="button">aLtErNaTe cAsE</button>
    </div>
</div>