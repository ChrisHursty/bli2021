<?php
if(is_tax('press_year', '2023') ) {
	get_template_part('parts/2023');

} elseif(is_tax('press_year', '2022') ) {
	get_template_part('parts/2022');

} elseif(is_tax('press_year', '2021') ) {
	get_template_part('parts/2021');

} elseif(is_tax('press_year', '2020') ) {
	get_template_part('parts/2020');

} elseif(is_tax('press_year', '2019') ) {
	get_template_part('parts/2019');

} elseif(is_tax('press_year', '2018') ) {
	get_template_part('parts/2018');

} elseif(is_tax('press_year', '2017') ) {
	get_template_part('parts/2017');

} elseif(is_tax('press_year', '2016') ) {
	get_template_part('parts/2016');

} elseif(is_tax('press_year', '2015') ) {
	get_template_part('parts/2015');

} elseif(is_tax('press_year', '2014') ) {
	get_template_part('parts/2014');

} elseif(is_tax('press_year', '2013_and_older') ) {
	get_template_part('parts/2013_and_older');
}

?>