<?php
const TOTAL_PICTURES = 80;
const FLOMASTER_PICTURES = 23;
const PENSIL_PICTURES = 40;

$paint_pictures = TOTAL_PICTURES - FLOMASTER_PICTURES - PENSIL_PICTURES;

echo 'На школьной выставке ', TOTAL_PICTURES, ' рисунков. ', FLOMASTER_PICTURES,
'выполнены фломастерами, ',  PENSIL_PICTURES, ' карандашами, а остальные — красками. 
Сколько рисунков, выполненные красками, на школьной выставке? <br /><br />
Ответ: красками выполнено ', $paint_pictures, ' рисунков';
