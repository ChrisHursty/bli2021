<?php
if(is_tax('recipe_type', 'dessert-recipes') ) {
	get_template_part('parts/recipe_term_dessert_recipes');

} elseif(is_tax('recipe_type', 'meat-poultry-recipes') ) {
	get_template_part('parts/recipe_term_meat_poultry_recipes');

} elseif(is_tax('recipe_type', 'seafood-recipes') ) {
	get_template_part('parts/recipe_term_seafood_recipes');

} elseif (is_tax('recipe_type', 'pasta-recipes') ) {
	get_template_part('parts/recipe_term_pasta_recipes');

} elseif (is_tax('recipe_type', 'antipasti-side-dish-recipes') ) {
	get_template_part('parts/recipe_term_antipasti_side_dish-recipes');

} elseif (is_tax('recipe_type', 'bread-recipes') ) {
	get_template_part('parts/recipe_term_bread_recipes');

}
?>