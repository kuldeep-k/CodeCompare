<div class="wrapper">

    <div class="left-content">
        <h1><img src='<?php echo $this->page['language']['icon_url'] ?>' width="30" height="30" /> <?php echo $this->page['language']['language_name'] ?></h1>
        <div class="short-details"><?php echo $this->page['language']['short_details'] ?></div>
        <div class="details"><?php echo $this->page['language']['details'] ?></div>
        <div class="links">
            <a target="_blank" href="<?php echo $this->page['language']['home_link'] ?>">Home Page</a> | 
            <a target="_blank" href="<?php echo $this->page['language']['download_link'] ?>">Download Page</a>  | 
            <a target="_blank" href="<?php echo $this->helper->link('code/index', array('language_id' => $this->page['language']['id'])) ?>">See codes for <?php echo $this->page['language']['language_name'] ?></a>  | 
            <a target="_blank" href="<?php echo $this->helper->link('code/add', array('language_id' => $this->page['language']['id'])) ?>">Add code for  <?php echo $this->page['language']['language_name'] ?></a>  | 

    </div>
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

