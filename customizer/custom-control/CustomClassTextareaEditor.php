<?php

class CustomClassTextareaEditor extends WP_Customize_Control {

  public $type = 'textarea';

  protected function render_content(){ ?>


<label>
<span class="customize-control-title"><?php echo esc_html($this->label) ?></span><br>
<span class="customize-control-description"><?php echo esc_html($this->description) ?></span>

<?php $settings = array(

'textarea_name' => 'Primo controllo editor Textarea',
'textarea_rows' => 5,



) ?>

<?php wp_editor( $this->value(), $this->id, $settings );

    do_action( 'admin_print_footer_scripts' ) ?>

</label>

  <?php

}

}
