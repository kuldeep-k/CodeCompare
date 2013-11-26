<div class="wrapper">

    <div class="left-content">
        <h1><?php echo $this->page['code_type']['code_type_name'] ?></h1>
        <div class="short-details"><?php echo $this->page['code_type']['short_details'] ?></div>
        <div class="details"><?php echo $this->page['code_type']['details'] ?></div>
        <div class="links"></div>
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

