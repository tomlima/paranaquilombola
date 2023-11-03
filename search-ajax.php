<?php



function removeAccents($string)
{
	return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string);
}

function searchWord()
{
	global $wpdb;
	$searchedWord = strtolower(removeAccents($_POST["word"]));
	$query = "SELECT wp_posts.id as id,
       	wp_posts.post_title,
       	wp_terms.name,
				wp_posts.guid,
       (SELECT guid
        FROM   wp_posts
        WHERE  id = wp_postmeta.meta_value) AS image
				FROM   wp_posts,
							wp_postmeta,
							wp_term_relationships,
							wp_terms
				WHERE wp_posts.id = wp_term_relationships.object_id
							AND wp_terms.term_id = wp_term_relationships.term_taxonomy_id
							AND wp_posts.post_status = 'publish'
							AND wp_posts.post_type = 'post'
							AND wp_postmeta.post_id = wp_posts.id
							AND wp_postmeta.meta_key = '_thumbnail_id'
							AND wp_posts.post_title LIKE '%$searchedWord%'
				ORDER  BY wp_posts.post_date DESC LIMIT 10";

	$results = $wpdb->get_results($query);

	foreach ($results as $key => $result) {
		$id = $result->id;
		$link = get_permalink($id);
		$results[$key]->link = $link;
	}

	return $results;
}


$dados = array(
	'status' => 0,
	'dados' => searchWord(),
	'next_page' => $nextPage
);

echo wp_send_json($dados);
exit;
