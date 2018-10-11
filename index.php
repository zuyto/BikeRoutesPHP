<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
		
		<title>Bemat Admin v1 - Dashboard</title>
                <link rel="shortcut icon" href="recursos/favicon.ico" type="image/x-icon">

		<!-- Bootstrap Core CSS - Include with every page -->
                <link href="recursos/css/bootstrap.min.css" rel="stylesheet">

		<!-- Bemat Admin CSS - Include with every page -->
                <link href="recursos/css/themes/theme-default/bemat-admin.css" rel="stylesheet" id="theme-switcher">
	</head>

	<body class="container-fluid">
	
		<!-- DEMO CONTENT - THEME SETTINGS -->
		<!-- This portion of code can be deleted -->
		<div id="theme-options-settings" class="theme-options">
			<div class="theme-options-panel layout-align-start-start layout-row">
				<div class="theme-options-panel-toggle"><i class="material-icons">settings</i></div>
				<div class="theme-options-list">
					<div class="theme-option">
						<div class="option-title">Layout Options:</div>
						<div class="radio-group">
							<label>
								<input id="themeOpt1" class="switch switch-primary" type="checkbox" />
								<span>Dark Header Brand</span>
							</label>
							<label>
								<input id="themeOpt2" class="switch switch-primary" type="checkbox" />
								<span>Dark Header Toolbar</span>
							</label>
							<label>
								<input id="themeOpt3" class="switch switch-primary" type="checkbox" />
								<span>Dark Sidebar</span>
							</label>
							<label>
								<input id="themeOpt4" class="switch switch-primary" type="checkbox" />
								<span>Collapsed Sidebar <small><abbr title="Experimental State">(Exp.)</abbr></small></span>
							</label>
							<label>
								<input id="themeOpt5" class="switch switch-primary" type="checkbox" checked />
								<span>Alternative Page Header</span>
							</label>
							
							<label>
								<input id="themeOpt6" class="switch switch-primary" type="checkbox" />
								<span>Fixed Footer</span>
							</label>
							<label>
								<input id="themeOpt7" class="switch switch-success" type="checkbox" />
								<span>Boxed Layout</span>
							</label>
						</div>
					</div><!-- /.theme-option -->
					<div class="divider-horizontal"></div>
					<div class="theme-option">
						<div class="option-title">Global Config:</div>
						<div class="radio-group">
							<label>
								<input id="themeOpt8" class="switch switch-info" type="checkbox" />
								<span>Material Page Transition</span>
							</label>
							<label>
								<input id="themeOpt9" class="switch switch-info" type="checkbox" />
								<span>Sidebar Menu Accordion</span>
							</label>
						</div>
					</div><!-- /.theme-option -->
				</div><!-- /.theme-options-list -->
			</div><!-- /.theme-options-panel -->
		</div>
		<div id="theme-options-style" class="theme-options">
			<div class="theme-options-panel layout-align-start-start layout-row">
				<div class="theme-options-panel-toggle"><i class="material-icons">palette</i></div>
				<div class="theme-options-list">
					<div class="theme-option">
						<div class="option-title">Color Skin:</div>
						<div class="radio-group">
							<label>
								<input id="themeStyle1" class="switch themeStyle switch-primary activeTheme" type="radio" name="themeRadio" data-theme="theme-default" checked />
								<span>Default Theme</span>
							</label>
							<label>
								<input id="themeStyle2" class="switch themeStyle switch-primary" type="radio" name="themeRadio" data-theme="theme-1-forgedsteel"/>
								<span>ForgedSteel Theme</span>
							</label>
							<label>
								<input id="themeStyle3" class="switch themeStyle switch-primary" type="radio" name="themeRadio" data-theme="theme-2-bubblegum"/>
								<span>Bubblegum Theme</span>
							</label>
							<label>
								<input id="themeStyle4" class="switch themeStyle switch-primary" type="radio" name="themeRadio" data-theme="theme-3-flat"/>
								<span>Flat Theme</span>
							</label>
						</div>
					</div><!-- /.theme-option -->
					
					<div class="divider-horizontal"></div>
					<div class="theme-option">
						<div class="option-title">Color Skin Primary Color:</div>
						<div class="colorSwitcher flex-display">
							<div class="margin-right-1 margin-bottom-1 bordered cursor-pointer border-circle colorTheme primary-style" title="Theme Primary Color Style" data-toggle="tooltip" data-theme="primary"></div>
							<div class="margin-right-1 margin-bottom-1 bordered cursor-pointer border-circle colorTheme success-style" title="Theme Success Color Style" data-toggle="tooltip" data-theme="success"></div>
							<div class="margin-right-1 margin-bottom-1 bordered cursor-pointer border-circle colorTheme info-style" title="Theme Info Color Style" data-toggle="tooltip" data-theme="info"></div>
							<div class="margin-right-1 margin-bottom-1 bordered cursor-pointer border-circle colorTheme warning-style" title="Theme Warning Color Style" data-toggle="tooltip" data-theme="warning"></div>
							<div class="margin-right-1 margin-bottom-1 bordered cursor-pointer border-circle colorTheme danger-style" title="Theme Danger Color Style" data-toggle="tooltip" data-theme="danger"></div>
						</div>
					</div><!-- /.theme-option -->
					
					<div class="divider-horizontal"></div>
					<div class="theme-option">
						<div class="option-title">Userbox Background:</div>
						<div class="radio-group">
							<label>
								<input id="themeStyle5" class="switch switch-info" type="checkbox" />
								<span>Colored Background</span>
							</label>
						</div>
					</div><!-- /.theme-option -->
					
					<div class="divider-horizontal"></div>
					<div class="theme-option">
						<div class="option-title">Boxed Layout Background:</div>
						<div id="patternSwitcher" class="pattern-bg padding-bottom-1 has-custom-scrollbar"><div class="pattern-bg-inner">
                                                        <img src="recursos/img/bgs/pattern/binding_dark-xs.png" data-pattern="binding_dark.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
							<img src="recursos/img/bgs/pattern/brickwall-xs.png" data-pattern="brickwall.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/congruent_outline-xs.png" data-pattern="congruent_outline.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/congruent_pentagon-xs.png" data-pattern="congruent_pentagon.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/dark_embroidery-xs.png" data-pattern="dark_embroidery.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/footer_lodyas-xs.png" data-pattern="footer_lodyas.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/graphy-xs.png" data-pattern="graphy.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/halftone-xs.png" data-pattern="halftone.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/notebook-xs.png" data-pattern="notebook.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/pw_pattern-xs.png" data-pattern="pw_pattern.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/seamless_paper_texture-xs.png" data-pattern="seamless_paper_texture.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/sos-xs.png" data-pattern="sos.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/squared_metal-xs.png" data-pattern="squared_metal.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/stardust-xs.png" data-pattern="stardust.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/transp_bg-xs.png" data-pattern="transp_bg.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/tree_bark-xs.png" data-pattern="tree_bark.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/triangular-xs.png" data-pattern="triangular.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/tweed-xs.png" data-pattern="tweed.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/wood_texture-xs.png" data-pattern="wood_texture.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
                                                        <img src="recursos/img/bgs/pattern/zwartevilt-xs.png" data-pattern="zwartevilt.png" width="22" height="22" class="margin-right-1 margin-bottom-1 bordered cursor-pointer" />
						</div></div>
					</div><!-- /.theme-option -->
				</div><!-- /.theme-options-list -->
			</div><!-- /.theme-options-panel -->
		</div>
		<!-- This portion of code can be deleted -->
		<!-- END DEMO CONTENT - THEME SETTINGS -->
		


		<div id="splash-screen" class="layout layout-align-center">
			<div class="logo-box logo-box-primary layout layout-column">
				<div class="logo">
					<b>B</b>
				</div>
				<div class="logo-label headline-inverse">
					<p>BEMAT</p>
				</div>
			</div>
		</div>
		<div id="page-wrapper">
			<aside id="left-content" data-toggle="open" data-default="open" data-size="">
				<header class="header-container">
					<div class="header-wrapper">
						<div id="header-brand">
							<div class="logo padding-left-2">
								<span class="logo-image">B</span>
								<span class="logo-text">Bemat</span>
							</div>
						</div>
					</div>
				</header>
				<div id="sidebar-wrapper">
					<div id="userbox">
						<div id="useravatar">
							<div class="avatar-thumbnail">
                                                            <img src="recursos/img/avatar/avatar_square_blue.png" class="img-circle"/>
							</div>
						</div>

						<div id="userinfo">
							<div class="btn-group">
								<button type="button" class="btn btn-default-bright btn-flat dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe <i class="material-icons">arrow_drop_down</i>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="material-icons">person</i> <span data-i18n="userinfo.profile">Your Profile</span></a></li>
									<li><a href="#"><i class="material-icons">settings</i> <span data-i18n="userinfo.settings">Settings</span></a></li>
									<li class="divider-horizontal"></li>
									<li><a href="#"><i class="material-icons">lock</i> <span data-i18n="userinfo.lock">Lock</span></a></li>
									<li class="divider-horizontal"></li>
									<li><a href="#"><i class="material-icons">exit_to_app</i> <span data-i18n="userinfo.logout">Log Out</span></a></li>
								</ul>
							</div>
						</div>
					</div> <!-- END: #userbox -->


					<nav id="sidebar">
						<ul>
							<li>
                                                            <a href="vistas/pages/dashboard.html">
									<span class="menu-item-ico"><i class="material-icons">dashboard</i></span>
									<span class="menu-item-name" data-i18n="nav.dashboard">Dashboard</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="menu-item-ico"><i class="material-icons">extension</i></span>
									<span class="menu-item-name" data-i18n="nav.components.components">Components</span>
								</a>
								<ul>
                                                                    <li><a href="vistas/pages/page-accordions.html"><span data-i18n="nav.components.accordions">Accordions</span></a></li>
                                                                    <li><a href="vistas/pages/page-alerts.html"><span data-i18n="nav.components.alerts">Alerts</span></a></li>
                                                                    <li><a href="vistas/pages/page-badges.html"><span data-i18n="nav.components.badges">Badges & Labels</span></a></li>
                                                                    <li><a href="vistas/pages/page-boxshadow.html"><span data-i18n="nav.components.boxshadow">Box Shadow</span></a></li>
									<li>
										<a href="#"><span data-i18n="nav.components.buttons.buttons">Buttons</span> <span class="badge badge-success">3</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-buttons-types.html"><span data-i18n="nav.components.buttons.buttonTypes">Button Types</span></a></li>
                                                                                    <li><a href="vistas/pages/page-buttons-FAB-speed-dial.html"><span data-i18n="nav.components.buttons.FABSpeedDial">FAB Speed Dial</span> <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
                                                                                    <li><a href="vistas/pages/page-buttons-ink-ripple.html"><span data-i18n="nav.components.buttons.materialRipple">Material Ink Ripple</span> <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
										</ul>
									</li>
                                                                        <li><a href="vistas/pages/page-breadcrumbs.html"><span data-i18n="nav.components.breadcrumbs">Breadcrumbs</span></a></li>
                                                                        <li><a href="vistas/pages/page-colors-material-design.html"><span data-i18n="nav.components.colors">Colors</span></a></li>
                                                                        <li><a href="vistas/pages/page-dropdowns.html"><span data-i18n="nav.components.dropdowns">Dropdowns</span></a></li>
                                                                        <li><a href="vistas/pages/page-grid.html"><span data-i18n="nav.components.grid">Grid</span></a></li>
									<li>
										<a href="#"><span data-i18n="nav.components.icons.icons">Icons</span> <span class="badge badge-info">2</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-icons-materialdesign.html"><span data-i18n="nav.components.icons.material">Material Design Icons</span></a></li>
                                                                                    <li><a href="vistas/pages/page-icons-fontawesome.html"><span data-i18n="nav.components.icons.fontAwesome">Font Awesome</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#"><span data-i18n="nav.components.lists.lists">Lists</span> <span class="badge badge-warning">2</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-lists.html"><span data-i18n="nav.components.lists.normal">Normal Lists</span></a></li>
                                                                                    <li><a href="vistas/pages/page-lists-subheader.html"><span data-i18n="nav.components.lists.subheader">Subheader Sticky</span> <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
										</ul>
									</li>
                                                                        <li><a href="vistas/pages/page-modals.html"><span data-i18n="nav.components.modals">Modals</span></a></li>
                                                                        <li><a href="vistas/pages/page-multilevelsmenu.html"><span data-i18n="nav.components.menu">Multi Levels Side Menu</span></a></li>
									<li>
										<a href="#"><span data-i18n="nav.components.notifications.notifications">Notifications</span> <span class="badge badge-warning">2</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-notifications-snackbar.html"><span data-i18n="nav.components.notifications.snackbars">Snackbars</span> <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
                                                                                    <li><a href="vistas/pages/page-notifications-toasts.html"><span data-i18n="nav.components.notifications.toasts">Toasts</span> <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
										</ul>
									</li>
									<li>
										<a href="#"><span data-i18n="nav.components.pagination.pagination">Pagination</span> <span class="badge badge-danger">2</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-pagination.html"><span data-i18n="nav.components.pagination.paginator">Pagination</span></a></li>
                                                                                    <li><a href="vistas/pages/page-pager.html"><span data-i18n="nav.components.pagination.pager">Pager</span></a></li>
										</ul>
									</li>
                                                                        <li><a href="vistas/pages/page-panels.html"><span data-i18n="nav.components.panels">Panels</span></a></li>
									<li>
										<a href="#"><span data-i18n="nav.components.progressIndicators.progressIndicators">Progress Indicators</span> <span class="badge badge-success">3</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-progress-circular.html"><span data-i18n="nav.components.progressIndicators.circular">Circular</span> <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
                                                                                    <li><a href="vistas/pages/page-progress-linear.html"><span data-i18n="nav.components.progressIndicators.linear">Linear</span> <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
                                                                                    <li><a href="vistas/pages/page-progress-progressbar.html"><span data-i18n="nav.components.progressIndicators.bootstrap">Bootstrap Progressbar</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#"><span data-i18n="nav.components.tables.tables">Tables</span> <span class="badge badge-info">3</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-tables-static.html"><span data-i18n="nav.components.tables.static">Static Tables</span></a></li>
                                                                                    <li><a href="vistas/pages/page-tables-dynamic.html"><span data-i18n="nav.components.tables.dynamic">Dynamic Tables</span></a></li>
                                                                                    <li><a href="vistas/pages/page-tables-responsive.html"><span data-i18n="nav.components.tables.responsive">Responsive Tables</span></a></li>
										</ul>
									</li>
                                                                        <li><a href="vistas/pages/page-tabs.html"><span data-i18n="nav.components.tabs">Tabs</span></a></li>
                                                                        <li><a href="vistas/pages/page-tooltips.html"><span data-i18n="nav.components.tooltips">Tooltips</span></a></li>
                                                                        <li><a href="vistas/pages/page-typography.html"><span data-i18n="nav.components.typography">Typography</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">
									<span class="menu-item-ico"><i class="material-icons">format_align_left</i></span>
									<span class="menu-item-name" data-i18n="nav.forms.forms">Forms</span>
									<span class="label label-primary" data-i18n="nav.general.new">New</span>
								</a>
								<ul>
                                                                    <li><a href="vistas/pages/page-forms-basic.html"><span data-i18n="nav.forms.basic">Form Elements Basic</span></a></li>
									<li>
										<a href="#"><span data-i18n="nav.forms.editors.editors">Text Editors</span> <span class="badge badge-primary">7</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-editors-ckeditor.html"><span data-i18n="nav.forms.editors.editor2">CKEditor</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
                                                                                    <li><a href="vistas/pages/page-editors-summernote.html"><span data-i18n="nav.forms.editors.editor1">Summernote</span></a></li>
                                                                                    <li><a href="vistas/pages/page-editors-wysihtml5.html"><span data-i18n="nav.forms.editors.editor3">WYSIHTML5</span></a></li>
                                                                                    <li><a href="vistas/pages/page-editors-bootstrapMarkdown.html"><span data-i18n="nav.forms.editors.editor4">Markdown</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
                                                                                    <li><a href="vistas/pages/page-editors-simditor.html"><span data-i18n="nav.forms.editors.editor5">Simditor</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
                                                                                    <li><a href="vistas/pages/page-editors-trumbowyg.html"><span data-i18n="nav.forms.editors.editor6">Trumbowyg</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
                                                                                    <li><a href="vistas/pages/page-editors-mediumeditor.html"><span data-i18n="nav.forms.editors.editor7">MediumEditor</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#"><span data-i18n="nav.forms.codeEditors.editors">Code Editors</span> <span class="badge badge-primary">2</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-code-editors-ace.html"><span data-i18n="nav.forms.codeEditors.editor1">Ace</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
                                                                                    <li><a href="vistas/pages/page-code-editors-codemirror.html"><span data-i18n="nav.forms.codeEditors.editor2">CodeMirror</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
										</ul>
									</li>
									<li>
										<a href="#"><span data-i18n="nav.forms.syntax.editors">Syntax Highlighter</span> <span class="badge badge-primary">3</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-syntax-googleprettify.html"><span data-i18n="nav.forms.syntax.editor1">Google Prettify</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
                                                                                    <li><a href="vistas/pages/page-syntax-prism.html"><span data-i18n="nav.forms.syntax.editor2">Prism</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
                                                                                    <li><a href="vistas/pages/page-syntax-highlight.html"><span data-i18n="nav.forms.syntax.editor3">Highlight.js</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<span class="menu-item-ico"><i class="material-icons">insert_chart</i></span>
									<span class="menu-item-name" data-i18n="nav.charts.charts">Charts</span>
								</a>
								<ul>
                                                                    <li><a href="vistas/pages/page-charts-sparklines.html"><span data-i18n="nav.charts.chart1">Sparklines</span></a></li>
                                                                    <li><a href="vistas/pages/page-charts-peity.html"><span data-i18n="nav.charts.chart2">Peity</span></a></li>
                                                                    <li><a href="vistas/pages/page-charts-simplePieCharts.html"><span data-i18n="nav.charts.chart3">Simple Pie Charts</span></a></li>
                                                                    <li><a href="vistas/pages/page-charts-chartist.html"><span data-i18n="nav.charts.chart4">Chartist.js</span></a></li>
                                                                    <li><a href="vistas/pages/page-charts-nvd3.html"><span data-i18n="nav.charts.chart5">NVD3</span></a></li>
                                                                    <li><a href="vistas/pages/page-charts-chartjs.html"><span data-i18n="nav.charts.chart6">Chart.js</span><span class="label label-primary" data-i18n="nav.general.new">New</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">
									<span class="menu-item-ico"><i class="material-icons">apps</i></span>
									<span class="menu-item-name" data-i18n="nav.others.others">Other Features</span>
									<span class="label label-primary" data-i18n="nav.general.new">New</span>
								</a>
								<ul>
                                                                    <li><a href="vistas/pages/page-others-tinycon.html"><span data-i18n="nav.others.other1">Favicon Notifications</span></a></li>
                                                                    <li><a href="vistas/pages/page-others-swalert.html"><span data-i18n="nav.others.other2">Sweet Alert</span></a></li>
                                                                    <li><a href="vistas/pages/page-others-idletimer.html"><span data-i18n="nav.others.other3">Idle Timer</span></a></li>
                                                                    <li><a href="vistas/pages/page-others-hierarchicalDisplay.html"><span data-i18n="nav.others.other4">Hierarchical Display</span></a></li>
                                                                    <li><a href="vistas/pages/page-others-cssAnimations.html"><span data-i18n="nav.others.other5">CSS Animations</span></a></li>
                                                                    <li><a href="vistas/pages/page-others-gmaps.html"><span data-i18n="nav.others.other6">Google Maps</span></a></li>
                                                                    <li><a href="vistas/pages/page-others-i18n.html"><span data-i18n="nav.others.other7">i18n Support</span></a></li>
                                                                    <li><a href="vistas/pages/page-others-clipboard.html"><span data-i18n="nav.others.other8">Clipboard</span></a></li>
								</ul>
							</li>
							<li class="nav-main-heading">
								<span class="sidebar-mini-hide" data-i18n="nav.bac.bematAdmin">Bemat Admin</span>
							</li>
							<li>
								<a href="#">
									<span class="menu-item-ico"><i class="material-icons">settings_applications</i></span>
									<span class="menu-item-name" data-i18n="nav.bac.bac">Bemat Admin Core</span>
								</a>
								<ul>
                                                                    <li><a href="vistas/pages/bac-app-layouts.html"><span data-i18n="nav.bac.layouts">App Layouts</span></a></li>
                                                                    <li><a href="vistas/pages/bac-app-skins.html"><span data-i18n="nav.bac.skins">App Skins</span></a></li>
                                                                    <li><a href="vistas/pages/bac-app-settings.html"><span data-i18n="nav.bac.settings">App Settings</span></a></li>
									<li><a href="#"><span data-i18n="nav.bac.variations">App Variations</span> <span class="label label-warning" data-i18n="nav.general.soon">Soon</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">
									<span class="menu-item-ico"><i class="material-icons">live_help</i></span>
									<span class="menu-item-name" data-i18n="nav.helpers.helpers">Helper Functions</span>
									<span class="label label-primary" data-i18n="nav.general.new">New</span>
								</a>
								<ul>
                                                                    <li><a href="vistas/pages/helper-classes.html"><span data-i18n="nav.helpers.classes">Helper Classes</span></a></li>
                                                                    <li><a href="vistas/pages/helper-functions.html"><span data-i18n="nav.helpers.functions">Helper Functions</span></a></li>
								</ul>
							</li>
							<li class="nav-main-heading">
								<span class="sidebar-mini-hide" data-i18n="nav.premadePages.premadePages">Premade Pages & Apps</span>
							</li>
							<li>
								<a href="#">
									<span class="menu-item-ico"><i class="material-icons">insert_drive_file</i></span>
									<span class="menu-item-name" data-i18n="nav.premadePages.pages">Pages</span>
								</a>
								<ul>
									<li>
										<a href="#"><span data-i18n="nav.premadePages.authentication.authentication">Authentication</span> <span class="badge badge-default">4</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-authentication-forgot-password.html" target="_top"><span data-i18n="nav.premadePages.authentication.forgotPassword">Forgot Password</span></a></li>
                                                                                    <li><a href="vistas/pages/page-authentication-login.html" target="_top"><span data-i18n="nav.premadePages.authentication.login">Login Page</span></a></li>
                                                                                    <li><a href="vistas/pages/page-authentication-lock.html" target="_top"><span data-i18n="nav.premadePages.authentication.lock">Lock Page</span></a></li>
                                                                                    <li><a href="vistas/pages/page-authentication-register.html" target="_top"><span data-i18n="nav.premadePages.authentication.register">Register</span></a></li>
										</ul>
									</li>
                                                                        <li><a href="vistas/ges/page-helpfaq.html"><span data-i18n="nav.premadePages.help">Help & FAQ</span></a></li>
                                                                        <li><a href="vistas/pages/page-invoice.html"><span data-i18n="nav.premadePages.invoice">Invoice</span></a></li>
                                                                        <li><a href="vistas/pages/page-maintenance.html" target="_top"><span data-i18n="nav.premadePages.maintenance">Maintenance</span></a></li>
                                                                        <li><a href="vistas/pages/page-pricing.html"><span data-i18n="nav.premadePages.pricingTables">Pricing Tables</span></a></li>
                                                                        <li><a href="vistas/pages/page-settings.html"><span data-i18n="nav.premadePages.settings">Settings</span></a></li>
									<li>
										<a href="#"><span data-i18n="nav.premadePages.errors.errors">Errors</span> <span class="badge badge-default">2</span></a>
										<ul>
                                                                                    <li><a href="vistas/pages/page-error-404.html" target="_top"><span data-i18n="nav.premadePages.errors.404">Error 404</span></a></li>
                                                                                    <li><a href="vistas/pages/page-error-500.html" target="_top"><span data-i18n="nav.premadePages.errors.500">Error 500</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<span class="menu-item-ico"><i class="material-icons">mail</i></span>
									<span class="menu-item-name" data-i18n="nav.mailbox.mailbox">Mailbox</span>
									<span class="label label-primary" data-i18n="nav.general.new">New</span>
								</a>
								<ul>
                                                                    <li><a href="vistas/pages/mailbox/mailbox-inbox.html"><span data-i18n="nav.mailbox.inbox">Inbox</span></a></li>
                                                                    <li><a href="vistas/pages/mailbox/mailbox-compose.html"><span data-i18n="nav.mailbox.compose">Compose</span></a></li>
                                                                    <li><a href="vistas/pages/mailbox/mailbox-view.html"><span data-i18n="nav.mailbox.view">View</span></a></li>
                                                                    <li><a href="vistas/pages/mailbox/mailbox-templates.html"><span data-i18n="nav.mailbox.templates">Email Templates</span></a></li>
								</ul>
							</li>
							<li>
                                                            <a href="vistas/pages/page-calendar.html">
									<span class="menu-item-ico"><i class="material-icons">event</i></span>
									<span class="menu-item-name" data-i18n="nav.calendar">Calendar</span>
								</a>
							</li>
							<li class="nav-main-heading">
								<span class="sidebar-mini-hide" data-i18n="nav.multiLevelMenu">Multi Level Menu</span>
							</li>
							<li>
								<a href="#">
									<span class="menu-item-ico"><i class="fa fa-file-pdf-o"></i></span>
									<span class="menu-item-parent">Parent Item</span>
									<span class="label label-primary">8</span>
								</a>
								<ul>
									<li>
										<a href="#">Subitem 1</a>
										<ul>
											<li><a href="#">Level 2-1</a></li>
											<li><a href="#">Level 2-2</a></li>
											<li>
												<a href="#">Level 2-3</a>
												<ul>
													<li><a href="#">Level 3-1</a></li>
													<li>
														<a href="#">Level 3-2</a>
														<ul>
															<li><a href="#">Level 4-1</a></li>
															<li><a href="#">Level 4-2</a></li>
															<li>
																<a href="#">Level 4-3</a>
																<ul>
																	<li><a href="#">Level 5-1</a></li>
																	<li>
																		<a href="#">Level 5-2</a>
																		<ul>
																			<li><a href="#">Level 6-1</a></li>
																			<li><a href="#">Level 6-2</a></li>
																			<li><a href="#">Level 6-3</a></li>
																			<li><a href="#">Level 6-4</a></li>
																			<li><a href="#">Level 6-5</a></li>
																			<li><a href="#">Level 6-6</a></li>
																			<li>
																				<a href="#">Level 6-7</a>
																				<ul>
																					<li><a href="#">Level 7-1</a></li>
																					<li>
																						<a href="#">Level 7-2</a>
																						<ul>
																							<li><a href="#">Level 8-1</a></li>
																							<li><a href="#">Level 8-2</a></li>
																						</ul>
																					</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li><a href="#">Level 5-3</a></li>
																	<li><a href="#">Level 5-4</a></li>
																	<li><a href="#">Level 5-5</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li><a href="#">Level 3-3</a></li>
												</ul>
											</li>
											<li><a href="#">Level 2-4</a></li>
										</ul>
									</li>
									<li><a href="#">Subitem 2</a></li>
									<li><a href="#">Subitem 3</a></li>
								</ul>
							</li>

						</ul>
					</nav><!-- END: nav#sidebar -->	
				</div>
			</aside>
			
			<section id="right-content">
				<header class="header-container">
					<div class="header-wrapper">
						<div id="header-toolbar">
							<ul class="toolbar toolbar-left">
								<li>
									<a id="sidebar-toggle" data-state="open" href="javascript:void(0)"><i class="material-icons">menu</i></a>
								</li>
							</ul>

							<div id="searchbox">
								<span class="search-icon"><i class="material-icons">search</i></span>
								<input id="search-input" placeholder="Search" type="text" data-i18n="[placeholder]headerToolbar.searchbox"/>
							</div>

							<ul class="toolbar toolbar-right">
								<li class="dropdown">
									<a id="language-selector" href="javascript:void(0);" role="button" data-toggle="dropdown" data-container="body" data-placement="bottom" title="Language Selector" data-i18n="[title]headerToolbar.languageSelector"><i class="material-icons">language</i> <span class="caret"></span></a>
									<ul id="language-selector-list" class="dropdown-menu">
										<li class="active">
											<a href="javascript:void(0);" data-language="en"><span class="flag flag-us" alt="English"></span> English (US)</a>
										</li>
										<li>
											<a href="javascript:void(0);" data-language="es"><span class="flag flag-es" alt="Español"></span> Español</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);" id="fullscreen-toggle" data-toggle="tooltip" data-placement="bottom" title="Toggle Fullscreen" data-i18n="[title]headerToolbar.fullscreenToggle"><i class="material-icons">fullscreen</i></a>
								</li>
								<li id="user-profile" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<div class="avatar">
                                                                                    <img src="recursos/img/avatar/avatar_square_blue.png" class="img-circle img-responsive" />
										</div>
										<div class="user">
											<span class="username">John Doe</span>
										</div>
										<span class="expand-ico"><i class="material-icons">expand_more</i></span>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="material-icons">person</i> <span data-i18n="userinfo.profile">Your Profile</span></a></li>
										<li><a href="#"><i class="material-icons">settings</i> <span data-i18n="userinfo.settings">Settings</span></a></li>
										<li class="divider-horizontal"></li>
										<li><a href="#"><i class="material-icons">lock</i> <span data-i18n="userinfo.lock">Lock</span></a></li>
										<li class="divider-horizontal"></li>
										<li><a href="#"><i class="material-icons">exit_to_app</i> <span data-i18n="userinfo.logout">Log Out</span></a></li>
									</ul>
								</li><!-- /#user-profile -->
							</ul><!-- /.navbar-right -->					


						</div>
					</div><!-- /#header-toolbar -->
				</header>
				<section id="right-content-wrapper">
					<div class="right-content-outter">
						<div class="right-content-inner"></div>
					</div>
					<div id="page-footer" class="padding-1">
						<div>
							<strong>Bemat Admin v1.1</strong> - Web App Framework Copyright © 2015-2016
						</div>
					</div>
				</section><!-- /#right-content-wrapper -->
			</section><!-- /#right-content -->

		</div>

		<!-- Core Scripts - Include with every page -->
                <script src="recursos/js/jquery-1.10.2.js" type="text/javascript"></script>
                <script src="recursos/js/jquery-ui.custom.min.js" type="text/javascript"></script>
                <script src="recursos/js/bootstrap.min.js" type="text/javascript"></script>
                <script src="recursos/js/modernizr-custom-3.3.1.js" type="text/javascript"></script>
                <script src="recursos/js/LABjs/LAB.min.js" type="text/javascript"></script>
                <script src="recursos/js/bemat-admin-common.js" type="text/javascript"></script>
	</body>
</html>