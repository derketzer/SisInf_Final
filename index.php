<?php
	 /**
	 * Example Application
	 * @package Example-application
	 */

	require('smarty/libs/Smarty.class.php');

	$smarty = new Smarty;

	$smarty->setTemplateDir('templates/');
	$smarty->setCompileDir('smarty/templates_c/');
	$smarty->setConfigDir('smarty/configs/');
	$smarty->setCacheDir('smarty/cache/');

	$smarty->assign("urlBase", "http://www.aplikt.com");

	$smarty->assign("title", "Anáhuac Comparte");
	$smarty->assign("name", "Tablón de Anuncios Anáhuac");

	$smarty->assign("estilos", array("index"));

	$smarty->assign("ofertasDestacadas",
		array(
			array("imagen"=>"/img/tv.jpg",
				"titulo"=>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.",
				"url"=>"/bla"
			),
			array("imagen"=>"/img/xbox.jpg",
				"titulo"=>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.",
				"url"=>"/bla"
			),
			array("imagen"=>"/img/microwave.jpg",
				"titulo"=>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.",
				"url"=>"/bla"
			)
		)
	);

	$smarty->assign("ofertasNuevas",
		array(
			array("imagen"=>"/img/tv.jpg",
				"titulo"=>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.",
				"url"=>"/bla"
			),
			array("imagen"=>"/img/xbox.jpg",
				"titulo"=>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.",
				"url"=>"/bla"
			),
			array("imagen"=>"/img/microwave.jpg",
				"titulo"=>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.",
				"url"=>"/bla"
			)
		)
	);

	/*//$smarty->force_compile = true;
	$smarty->debugging = true;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;

	$smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill",true);
	$smarty->assign("FirstName",array("John","Mary","James","Henry"));
	$smarty->assign("LastName",array("Doe","Smith","Johnson","Case"));
	$smarty->assign("Class",array(array("A","B","C","D"), array("E", "F", "G", "H"),
		  array("I", "J", "K", "L"), array("M", "N", "O", "P")));

	$smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
		  array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

	$smarty->assign("option_values", array("NY","NE","KS","IA","OK","TX"));
	$smarty->assign("option_output", array("New York","Nebraska","Kansas","Iowa","Oklahoma","Texas"));
	$smarty->assign("option_selected", "NE");*/

	$smarty->display('index.tpl');
?>
