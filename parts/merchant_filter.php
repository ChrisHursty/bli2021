<?php
if(is_tax('merchants_type', 'bakers') ) {
	get_template_part('parts/merchant_term_bakers');

} elseif(is_tax('merchants_type', 'bars-and-lounges') ) {
	get_template_part('parts/merchant_term_barslounges');

} elseif(is_tax('merchants_type', 'beauty-barbershops') ) {
	get_template_part('parts/merchant_term_beautybarbershops');

} elseif (is_tax('merchants_type', 'butchers') ) {
	get_template_part('parts/merchant_term_butchers');

} elseif (is_tax('merchants_type', 'cafes') ) {
	get_template_part('parts/merchant_term_cafes');

} elseif (is_tax('merchants_type', 'clothing-accessories') ) {
	get_template_part('parts/merchant_term_clothing_accessories');

} elseif (is_tax('merchants_type', 'delicatessens') ) {
	get_template_part('parts/merchant_term_delicatessens');

} elseif (is_tax('merchants_type', 'fish-markets') ) {
	get_template_part('parts/merchant_term_fish_markets');

} elseif (is_tax('merchants_type', 'financial-insurance-legal') ) {
	get_template_part('parts/merchant_financial_insurance_legal');

} elseif (is_tax('merchants_type', 'fruit-stores') ) {
	get_template_part('parts/merchant_term_fruit_stores');

} elseif (is_tax('merchants_type', 'grocery-stores') ) {
	get_template_part('parts/merchant_term_grocery_stores');

} elseif (is_tax('merchants_type', 'institutions') ) {
	get_template_part('parts/merchant_term_institutions');

} elseif (is_tax('merchants_type', 'medical-dental') ) {
	get_template_part('parts/merchant_term_medicaldental');

} elseif (is_tax('merchants_type', 'pasta') ) {
	get_template_part('parts/merchant_term_pasta');

} elseif (is_tax('merchants_type', 'pastry') ) {
	get_template_part('parts/merchant_term_pastry');

} elseif (is_tax('merchants_type', 'pizzerias') ) {
	get_template_part('parts/merchant_term_pizzerias');

} elseif (is_tax('merchants_type', 'restaurants') ) {
	get_template_part('parts/merchant_term_restaurants');

} elseif (is_tax('merchants_type', 'services') ) {
	get_template_part('parts/merchant_term_services');

} elseif (is_tax('merchants_type', 'specialty-food-drink') ) {
	get_template_part('parts/merchant_term_specialty_food_drink');

} elseif (is_tax('merchants_type', 'specialty-stores') ) {
	get_template_part('parts/merchant_term_specialty_stores');
}
?>