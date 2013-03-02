<?php defined('EF5_SYSTEM') || exit;
/***********************************************************
| eXtreme-Fusion 5.0 Beta 5
| Content Management System
|
| Copyright (c) 2005-2012 eXtreme-Fusion Crew
| http://extreme-fusion.org/
|
| This product is licensed under the BSD License.
| http://extreme-fusion.org/ef5/license/
***********************************************************/

function render_page()
{
	// Nazwa strony
	TPL::this()->assign('Sitename', TPL::this()->_sett->get('site_name'));
	TPL::this()->assign('Menu', TPL::this()->showSubLinks('', 'menu'));

	// Panels - o ile istniej� na danej pozycji
	if (LEFT)    TPL::this()->assign('LEFT', LEFT);
	if (RIGHT)   TPL::this()->assign('RIGHT', RIGHT);

	// Cz�� �rodkowa strony - panele g�rne, mainbox, dolne
	TPL::this()->assign('CONTENT', TOP_CENTER.CONTENT.BOTTOM_CENTER);

	// Stopka - pobieranie z ustawie�
	TPL::this()->assign('Footer', TPL::this()->_sett->get('footer'));

	// Wymagane informacje o autorach
	TPL::this()->assign('Copyright', TPL::this()->showCopyright(FALSE));

	// Link do Panelu Admina widoczny dla Administrator�w
	TPL::this()->assign('AdminLinks', TPL::this()->showAdminLinks());

	TPL::this()->assign('VisitsCount', TPL::this()->getVisitsCount());
	
	// Renderowanie pliku szablonu
	TPL::this()->template('page.tpl');
}


function render_news()
{
	// Plugins / Dodatki
}

function opentable($title)
{
	// TODO: wdrozy� by by�o automatycznie w pliku tpl wrzucane przez klas� odpowiadaj�c� za szablon
	TPL::this()->assign('Begin', 'begin');

	// Tytu� panelu
	TPL::this()->assign('Title', $title);

	// Renderowanie pliku szablonu
	TPL::this()->template('content.tpl');
}

function closetable()
{
	// Renderowanie pliku szablonu
	TPL::this()->template('content.tpl');
}

function openside($title)
{
	// TODO: wdrozy� by by�o automatycznie w pliku tpl wrzucane przez klas� odpowiadaj�c� za szablon
	TPL::this()->assign('Begin', 'begin');

	// Tytu� panelu
	TPL::this()->assign('Title', $title);

	// Renderowanie pliku szablonu
	TPL::this()->template('panels.tpl');
}

function closeside()
{
	// Renderowanie pliku szablonu
	TPL::this()->template('panels.tpl');
}