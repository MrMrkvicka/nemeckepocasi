

<?php $this->extend("layout/template"); ?>

<?php $this->section("content"); ?>


<h1>Přehled meteorologických stanic ve spolkové zemi</h1>


<div class="row">
    <div class="col-12">



    <?php

$table = new \CodeIgniter\View\Table();

$table->setHeading("Id","Název","zkratka");


foreach($mista as $row){
    $table->addRow($row->id,anchor("zeme/".$row->id ,$row->name),$row->short_name);
}

$template = array(
    'table_open'=> '<table class="table table-bordered">',
    'thead_open'=> '<thead>',
    'thead_close'=> '</thead>',
    'heading_row_start'=> '<tr>',
    'heading_row_end'=>' </tr>',
    'heading_cell_start'=> '<th>',
    'heading_cell_end' => '</th>',
    'tbody_open' => '<tbody>',
    'tbody_close' => '</tbody>',
    'row_start' => '<tr>',
    'row_end'  => '</tr>',
    'cell_start' => '<td>',
    'cell_end' => '</td>',
    'row_alt_start' => '<tr>',
    'row_alt_end' => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end' => '</td>',
    'table_close' => '</table>'
    );
    
    $table->setTemplate($template);

echo $table->generate();


// var_dump($hraci);

?>
    </div>

</div>







<?php $this->endsection(); ?>



