<div class="wrapper">

    <div class="left-content">
        <h1>Codes</h1>


        <?php foreach($this->page['codes'] as $code): ?>
            <div class="code-row">
                <div class="code-row-lang">Language used : <?php echo $code['language_name'] ?> </div>
                <div class="code-row-ctype"><a href="<?php echo $this->helper->link('code/view', array('id' => $language_row['id'])) ?>"><?php echo $code['code_type_name'] ?></a></div>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="right-content">
<div class="block"><h4>Latest Language</h4>
<div class="links">
    <?php foreach($this->page['lat_languages'] as $language_row): ?>
        <div class="link"><a href="<?php echo $this->helper->link('language/view', array('id' => $language_row['id'])) ?>"><?php echo $language_row['language_name'] ?></a></div>
    <?php endforeach; ?>
</div></div>
<div class="block"><h4>Latest Code Types</h4>
<div class="links">
    <?php foreach($this->page['lat_code_types'] as $code_type): ?>
        <div class="link"><a href="<?php echo $this->helper->link('codeType/view', array('id' => $code_type['id'])) ?>"><?php echo $code_type['code_type_name'] ?></a></div>
    <?php endforeach; ?>
</div></div>
<div class="block">Third</div>
</div>
</div>

