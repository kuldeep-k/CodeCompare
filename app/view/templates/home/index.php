<div class="wrapper">

    <div class="left-content">
        <h1>Home</h1>
    </div>
    <div class="right-content">
<div class="block"><h4>Latest Language</h4>
<div class="links">
    <?php foreach($this->page['lat_languages'] as $language): ?>
        <div class="link"><a href="<?php echo $this->helper->link('language/view', array('id' => $language['id'])) ?>"><?php echo $language['language_name'] ?></a></div>
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

