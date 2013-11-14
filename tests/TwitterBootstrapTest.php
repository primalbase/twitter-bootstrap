<?php
use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;

class TwitterBootstrapTest extends \PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    Primalbase\Tag\Tag::$codeFormat = false;
  }
  protected function tearDown()
  {

  }

  public function testBuild()
  {

  }

  public function testReadMeExamples()
  {
    $this->assertEquals(
      '<html lang="ja"></html>',
      (string)Tag::html('ja')
    );

    $this->assertEquals(
      '<div class="container"></div>',
      (string)Tag::container()
    );

    $this->assertEquals(
      '<div class="row"></div>',
      (string)Tag::row()
    );

    $this->assertEquals(
      '<div class="col-xs-4"></div>',
      (string)Tag::col(4)
    );

    $this->assertEquals(
      '<div class="col-xs-4"></div>',
      (string)Tag::colXs(4)
    );

    $this->assertEquals(
      '<div class="row"><div class="col-md-10 col-md-offset-2">text body</div></div>',
      (string)Tag::row(Tag::colMd(10, 'text body')->mdOffset(2))
    );

    $this->assertEquals(
      '<input type="text" class="form-control" name="user" required>',
      (string)Tag::formTextRequired('user')
    );
  }

  public function testCSS()
  {
    $this->assertEquals('<!DOCTYPE html>', (string)Tag::getDocType());
    $this->assertEquals('<html lang="en"></html>', (string)Tag::html());
    $this->assertEquals('<html lang="ja" hoge="fuga"></html>', (string)Tag::html('ja', array('hoge' => 'fuga')));
    $this->assertEquals('<meta name="viewport" content="width=device-width, initial-scale=1.0">',
      (string)Tag::viewport());
    $this->assertEquals('<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=1.5">',
      (string)Tag::viewport(true, '1.0', '1.5'));
    $this->assertEquals('<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">',
      (string)Tag::viewport(false));
    $this->assertEquals('<img src="#" class="img-responsive">',
      (string)Tag::imgResponsive());
    $this->assertEquals('<img src="http://hoge.com/fuga.jpg" class="img-responsive" alt="Nice image." data-img="big-fuga.jpg">',
      (string)Tag::imgResponsive('http://hoge.com/fuga.jpg', 'Nice image.', array('data-img' => 'big-fuga.jpg')));
    $this->assertEquals('<div class="container"></div>', (string)Tag::container());
    $this->assertEquals('<div class="container" fuga>hoge</div>', (string)Tag::container('hoge', array('fuga')));

  }

  public function testCSSGridSystem()
  {
    $this->assertEquals('<div class="row"></div>', (string)Tag::row());
    $this->assertEquals('<div class="col-xs-1"></div>', (string)Tag::colXs(1));
    $this->assertEquals('<div class="col-sm-1"></div>', (string)Tag::colSm(1));
    $this->assertEquals('<div class="col-md-1"></div>', (string)Tag::colMd(1));
    $this->assertEquals('<div class="col-lg-1"></div>', (string)Tag::colLg(1));

    $this->assertEquals('<div class="col-xs-12 col-xs-pull-0"></div>', (string)Tag::col(12)->pull(0));
    $this->assertEquals('<div class="col-xs-12 col-xs-push-0"></div>', (string)Tag::col(12)->push(0));
    $this->assertEquals('<div class="col-xs-12 col-xs-offset-0"></div>', (string)Tag::col(12)->offset(0));

    $this->assertEquals('<div class="col-sm-1 col-sm-pull-1"></div>', (string)Tag::colSm(1)->smPull(1));
    $this->assertEquals('<div class="col-sm-1 col-sm-push-1"></div>', (string)Tag::colSm(1)->smPush(1));
    $this->assertEquals('<div class="col-sm-1 col-sm-offset-1"></div>', (string)Tag::colSm(1)->smOffset(1));

    $this->assertEquals('<div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>',
      (string)Tag::colXs(1)->sm(2)->md(3)->lg(4));
    $this->assertEquals(
      '<div class="col-xs-1 col-sm-2 col-md-3 col-lg-4 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-4"></div>',
      (string)Tag::colXs(1)->sm(2)->md(3)->lg(4)->xsOffset(1)->smOffset(2)->mdOffset(3)->lgOffset(4));
  }

  public function testCSSTypography()
  {
    $this->assertEquals('<p class="lead"></p>', (string)Tag::lead());
    $this->assertEquals('<p class="lead">lead text</p>', (string)Tag::lead('lead text'));
    $this->assertEquals('<p class="lead">lead text</p>', (string)Tag::p('lead text')->lead());

    $this->assertEquals('<p class="text-left"></p>', (string)Tag::textLeft());
    $this->assertEquals('<p class="text-left"></p>', (string)Tag::p()->textLeft());
    $this->assertEquals('<p class="text-center"></p>', (string)Tag::textCenter());
    $this->assertEquals('<p class="text-center"></p>', (string)Tag::p()->textCenter());
    $this->assertEquals('<p class="text-right"></p>', (string)Tag::textRight());
    $this->assertEquals('<p class="text-right"></p>', (string)Tag::p()->textRight());
    $this->assertEquals('<p class="text-muted"></p>', (string)Tag::textMuted());
    $this->assertEquals('<p class="text-muted"></p>', (string)Tag::p()->textMuted());
    $this->assertEquals('<p class="text-primary"></p>', (string)Tag::textPrimary());
    $this->assertEquals('<p class="text-primary"></p>', (string)Tag::p()->textPrimary());
    $this->assertEquals('<p class="text-success"></p>', (string)Tag::textSuccess());
    $this->assertEquals('<p class="text-success"></p>', (string)Tag::p()->textSuccess());
    $this->assertEquals('<p class="text-info"></p>', (string)Tag::textInfo());
    $this->assertEquals('<p class="text-info"></p>', (string)Tag::p()->textInfo());
    $this->assertEquals('<p class="text-warning"></p>', (string)Tag::textWarning());
    $this->assertEquals('<p class="text-warning"></p>', (string)Tag::p()->textWarning());
    $this->assertEquals('<p class="text-danger"></p>', (string)Tag::textDanger());
    $this->assertEquals('<p class="text-danger"></p>', (string)Tag::p()->textDanger());

    $this->assertEquals('<abbr title="attribute">attr</abbr>', (string)Tag::abbr('attribute', 'attr'));
    $this->assertEquals('<abbr title="HyperText Markup Language" class="initialism">HTML</abbr>', (string)Tag::abbrInitialism('HyperText Markup Language', 'HTML'));

    $this->assertEquals('<ul class="list-unstyled"></ul>', (string)Tag::ulUnstyled());
    $this->assertEquals('<ul class="list-unstyled"><li>...</li></ul>', (string)Tag::ulUnstyled(Tag::li('...')));
    $this->assertEquals('<ol class="list-unstyled"></ol>', (string)Tag::olUnstyled());
    $this->assertEquals('<ol class="list-unstyled"><li>...</li></ol>', (string)Tag::olUnstyled(Tag::li('...')));
    $this->assertEquals('<ul class="list-inline"></ul>', (string)Tag::ulInline());
    $this->assertEquals('<ul class="list-inline"><li>...</li></ul>', (string)Tag::ulInline(Tag::li('...')));
    $this->assertEquals('<ol class="list-inline"></ol>', (string)Tag::olInline());
    $this->assertEquals('<ol class="list-inline"><li>...</li></ol>', (string)Tag::olInline(Tag::li('...')));
    $this->assertEquals('<dl class="dl-horizontal"></dl>', (string)Tag::dlHorizontal());

  }

  public function testCSSCode()
  {
    $this->assertEquals('<pre class="pre-scrollable"></pre>', (string)Tag::preScrollable());
  }

  public function testCSSTable()
  {
    $this->assertEquals('<table class="table"></table>', (string)Tag::table());
    $this->assertEquals('<table class="table table-striped"></table>', (string)Tag::tableStriped());
    $this->assertEquals('<table class="table table-bordered"></table>', (string)Tag::tableBordered());
    $this->assertEquals('<table class="table table-hover"></table>', (string)Tag::tableHover());
    $this->assertEquals('<table class="table table-condensed"></table>', (string)Tag::tableCondensed());
    $this->assertInstanceOf('Primalbase\TwitterBootstrap\CSS\Table', Tag::table());
    $this->assertEquals('<tr></tr>', (string)Tag::table()->appendRow());
    $this->assertEquals('<table class="table"><tr></tr></table>', (string)Tag::table()->appendRow()->end());
    $this->assertEquals('<table class="table"><tr class="active"></tr></table>', (string)Tag::table()->appendRowActive()->end());
    $this->assertEquals('<table class="table"><tr class="success"></tr></table>', (string)Tag::table()->appendRowSuccess()->end());
    $this->assertEquals('<table class="table"><tr class="warning"></tr></table>', (string)Tag::table()->appendRowWarning()->end());
    $this->assertEquals('<table class="table"><tr class="danger"></tr></table>', (string)Tag::table()->appendRowDanger()->end());

    $this->assertInstanceOf('Primalbase\TwitterBootstrap\CSS\Table\Row', Tag::table()->appendRow());
    $this->assertEquals('<tr></tr>', (string)Tag::table()->appendRow()->close()->getRow());
    $this->assertEquals('<tr></tr>', (string)Tag::table()->appendRow());
    $this->assertEquals('<tr class="active"></tr>', (string)Tag::table()->appendRow()->active());

    $row = Tag::tableRow();
    $this->assertInstanceOf('Primalbase\TwitterBootstrap\CSS\Table\Row', Tag::tableRow());
    $this->assertEquals('<th>hoge</th>', (string)$row->appendTh('hoge'));
    $this->assertEquals('<th class="active"></th>', (string)$row->appendThActive());
    $this->assertEquals('<th class="success"></th>', (string)$row->appendThSuccess());
    $this->assertEquals('<th class="warning"></th>', (string)$row->appendThWarning());
    $this->assertEquals('<th class="danger"></th>', (string)$row->appendThDanger());
    $this->assertEquals('<td>fuga</td>', (string)$row->appendTd('fuga'));
    $this->assertEquals('<td class="active"></td>', (string)$row->appendTdActive());
    $this->assertEquals('<td class="success"></td>', (string)$row->appendTdSuccess());
    $this->assertEquals('<td class="warning"></td>', (string)$row->appendTdWarning());
    $this->assertEquals('<td class="danger"></td>', (string)$row->appendTdDanger());

    $this->assertEquals('<div class="table-responsive"><table class="table"></table></div>', (string)Tag::tableResponsive());
    $this->assertEquals('<div class="table-responsive"><table class="table"><tr></tr></table></div>', (string)Tag::tableResponsive()->appendRow()->end());
    $this->assertEquals('<tr></tr>', (string)Tag::tableResponsive()->appendRow());
  }

  /**
   * @todo Not implemented yet.
   */
  public function testCSSForms()
  {
    $this->assertEquals('<form role="form"></form>', (string)Tag::form());
    $this->assertEquals('<div class="form-group"></div>', (string)Tag::formGroup());
    $this->assertEquals('<div class="form-group"><label for="record_email" class="sr-only">Email address</label><input type="email" class="form-control" name="record[email]" placeholder="Enter email" id="record_email"></div>',
      (string)Tag::formGroup('Email address', Tag::formEmail('record[email]', null, 'Enter email')->id('record_email'), true)
    );
    $this->assertEquals('<form class="form-inline" role="form"></form>', (string)Tag::formInline());
    $this->assertInstanceOf('Primalbase\TwitterBootstrap\CSS\Forms', Tag::srOnly());
    $this->assertEquals('<label class="sr-only" for="record_tel">Telephone number</label>', (string)Tag::srOnly('record_tel', 'Telephone number'));
    $this->assertEquals('<form class="form-inline" role="form"><div class="form-group"><label class="sr-only" for="record_tel"></label></div></form>',
      (string)Tag::formInline(Tag::formGroup()->append(Tag::srOnly('record_tel')))
    );

    // CSS/Form/Inline form

    $this->assertEquals('<form class="form-inline" role="form"></form>', (string)Tag::formInline());

    // Css/Form/Horizontal form

    $this->assertEquals('<form class="form-horizontal" role="form"></form>', (string)Tag::formHorizontal());

    // CSS/Forms/Supported controls/Inputs

    // form text
    $this->assertEquals('<input type="text" class="form-control">', (string)Tag::formText());
    $this->assertEquals('<input type="text" class="form-control" name value placeholder>', (string)Tag::formText(false, false, false));
    $this->assertEquals(
      '<input type="text" class="form-control" name="record[name]" placeholder="text here" id="record_name">',
      (string)Tag::formText('record[name]', null, 'text here', array('id' => 'record_name'))
    );
    $this->assertEquals(
      '<input type="text" class="form-control" name="record[name]" placeholder="text here" id="record_name" required>',
      (string)Tag::formTextRequired('record[name]', null, 'text here', array('id' => 'record_name'))
    );
    // form hidden
    $this->assertEquals('<input type="hidden">', (string)Tag::formHidden());
    $this->assertEquals(
      '<input type="hidden" name="record[csrf]" value="hogefuga">',
      (string)Tag::formHidden('record[csrf]', 'hogefuga')
    );
    // form search
    $this->assertEquals('<input type="search" class="form-control">', (string)Tag::formSearch());
    $this->assertEquals('<input type="search" class="form-control" name="record[search]" placeholder="search now">',
      (string)Tag::formSearch('record[search]', null, 'search now'));
    $this->assertEquals('<input type="search" class="form-control" name="record[search]" placeholder="search now" required>',
      (string)Tag::formSearchRequired('record[search]', null, 'search now'));
    // form tel
    $this->assertEquals('<input type="tel" class="form-control">', (string)Tag::formTel());
    $this->assertEquals(
      '<input type="tel" class="form-control" name="record[tel]" placeholder="xxx-xxxx-xxxx">',
      (string)Tag::formTel('record[tel]', null, 'xxx-xxxx-xxxx')
    );
    $this->assertEquals('<input type="tel" class="form-control" name="record[tel]" placeholder="xxx-xxxx-xxxx" required>',
      (string)Tag::formTelRequired('record[tel]', null, 'xxx-xxxx-xxxx'));
    // form url
    $this->assertEquals('<input type="url" class="form-control">', (string)Tag::formUrl());
    $this->assertEquals(
      '<input type="url" class="form-control" name="record[url]" placeholder="http://www.hoge.jp">',
      (string)Tag::formUrl('record[url]', null, 'http://www.hoge.jp')
    );
    $this->assertEquals('<input type="url" class="form-control" required>', (string)Tag::formUrlRequired());
    // form email
    $this->assertEquals('<input type="email" class="form-control">', (string)Tag::formEmail());
    $this->assertEquals(
      '<input type="email" class="form-control" name="record[email]" value="hoge@fuga.jp" placeholder="mail address here" id="record_email">',
      (string)Tag::formEmail('record[email]', 'hoge@fuga.jp', 'mail address here')->id('record_email'));
    $this->assertEquals(
      '<input type="email" class="form-control" required>',
      (string)Tag::formEmailRequired()
    );
    // form password
    $this->assertEquals('<input type="password" class="form-control">', (string)Tag::formPassword());
    $this->assertEquals(
      '<input type="password" class="form-control" name="record[password]" value="password" placeholder="password here">',
      (string)Tag::formPassword('record[password]', 'password', 'password here')
    );
    $this->assertEquals(
      '<input type="password" class="form-control" name="record[password]" value="password" placeholder="password here" required>',
      (string)Tag::formPasswordRequired('record[password]', 'password', 'password here')
    );

    $this->assertEquals('<input type="datetime" class="form-control">',
      (string)Tag::formDatetime());
    $this->assertEquals('<input type="datetime" class="form-control" name="record[datetime]" value="2013-11-07T22:55:00" min="1980-01-01T00:00:00" max="2045-12-31T23:59:59" step="300" required>',
      (string)Tag::formDatetimeRequired('record[datetime]', '2013-11-07T22:55:00', '1980-01-01T00:00:00', '2045-12-31T23:59:59', 300));


    $this->assertInstanceOf('Primalbase\TwitterBootstrap\CSS\Forms', Tag::textarea());
    $this->assertEquals(
      '<textarea class="form-control" name="record[body]" cols="3" rows="9">'."body contents".'</textarea>',
      (string)Tag::textarea('record[body]', "body contents", null, array('cols' => 3, 'rows' => 9))
    );

  }

  /**
   * @todo Not implemented yet.
   */
  public function testCSSButtons()
  {

  }

  /**
   * @todo Not implemented yet.
   */
  public function testCSSImages()
  {

  }

  /**
   * @todo Not implemented yet.
   */
  public function testCSSHelper()
  {

  }

  /**
   * @todo Not implemented yet.
   */
  public function testCSSResponsiveUtilities()
  {

  }

  public function testComponents()
  {
    // Glyphicons not completed yet.
    // Dropdowns not completed yet.
    // Button groups not completed yet.
    // Button dropdowns not completed yet.
    // Input groups not completed yet.

    // Navs
    // Not completed yet.
    $this->assertEquals('<ul class="nav nav-tabs"></ul>', (string)Tag::tabs());
    $this->assertEquals('<ul class="nav nav-tabs"><li class="active"><a href="#">Home</a></li><li><a href="#">Profile</a></li><li><a href="#">Messages</a></li></ul>', (string)Tag::tabs(
      array('Home', '#', true),
      array('Profile', '#'),
      array('Messages')
    ));


    // Navbar
    $this->assertEquals('<div class="navbar-header"></div>', (string)Tag::navbarHeader());
    $this->assertEquals(
      '<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>',
      (string)Tag::navbarToggle()
    );
    $this->assertEquals('<ul class="nav navbar-nav"></ul>', (string)Tag::navbarNav());
    $this->assertEquals('<ul class="nav navbar-nav navbar-left"></ul>', (string)Tag::navbarNavLeft());
    $this->assertEquals('<ul class="nav navbar-nav navbar-right"></ul>', (string)Tag::navbarNavRight());
    $this->assertEquals('<a class="navbar-brand" href="#"></a>', (string)Tag::navbarBrand());
    $this->assertEquals('<div class="collapse navbar-collapse navbar-ex1-collapse"></div>', (string)Tag::navbarCollapse());
    $this->assertEquals('<div class="navbar"></div>', (string)Tag::navbar());
    $this->assertEquals('<div class="navbar navbar-inverse"></div>', (string)Tag::navbarInverse());
    $this->assertEquals('<div class="navbar navbar-inverse navbar-fixed-top"></div>', (string)Tag::navbarInverseFixedTop());

    // Breadcrumbs not completed yet.
    // Pagination not completed yet.
    // Labels not completed yet.
    // Badges not completed yet.
    // Jumbotoron not completed yet.
    // Page header not completed yet.
    // Thumbnails not completed yet.
    // Alerts
    // not completed yet.
    $this->assertEquals('<div class="alert alert-success"><p>Success!</p></div>', (string)Tag::alertSuccess('Success!'));
    $this->assertEquals('<div class="alert alert-info"><p>Info!</p></div>', (string)Tag::alertInfo('Info!'));
    $this->assertEquals('<div class="alert alert-warning"><p>Warning!</p></div>', (string)Tag::alertWarning('Warning!'));
    $this->assertEquals('<div class="alert alert-danger"><p>Danger!</p></div>', (string)Tag::alertDanger('Danger!'));
    $this->assertEquals('<div class="alert alert-dismissable"><button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button><p>Success!</p></div>', (string)Tag::alertDismissable('Success!'));
    $this->assertEquals('<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button><p>Info!</p></div>', (string)Tag::alertInfoDismissable('Info!'));
    $this->assertEquals('<a class="alert-link" href="#">link</a>', (string)Tag::alertLink('link', '#'));
    $this->assertEquals('<div class="alert"><p>A!</p><p>B!</p><p>C!</p></div>', (string)Tag::alert(array('A!', 'B!'), 'C!'));

    // Progress bars not completed yet.
    // Media object not completed yet.
    // List group not completed yet.

    // Panels
    $this->assertEquals('<div class="panel panel-default"></div>', (string)Tag::panel());
    $this->assertEquals('<div class="panel panel-primary"></div>', (string)Tag::panelPrimary());
    $this->assertEquals('<div class="panel panel-success"></div>', (string)Tag::panelSuccess());
    $this->assertEquals('<div class="panel panel-info"></div>', (string)Tag::panelInfo());
    $this->assertEquals('<div class="panel panel-warning"></div>', (string)Tag::panelWarning());
    $this->assertEquals('<div class="panel panel-danger"></div>', (string)Tag::panelDanger());
    $this->assertEquals('<div class="panel-heading"></div>', (string)Tag::panelHeading());
    $this->assertEquals('<div class="panel-body"></div>', (string)Tag::panelBody());
    $this->assertEquals('<h3 class="panel-title"></h3>', (string)Tag::panelTitle());
    $this->assertEquals('<h1 class="panel-title"></h1>', (string)Tag::panelTitleH1());
    $this->assertEquals('<div class="panel-footer"></div>', (string)Tag::panelFooter());

    // Wells not completed yet.
  }


  public function testCamelize()
  {
    $this->assertEquals('testCase', Tag::_camelize('test-case'));
    $this->assertEquals('superTestCase', Tag::_camelize('super-test-case'));
    $this->assertEquals('thirdTestCase', Tag::_camelize('THIRD-TEST-CASE'));
  }

  public function testChaincase()
  {
    $this->assertEquals('test-case', Tag::_chaincase('testCase'));
    $this->assertEquals('super-test-case', Tag::_chaincase('superTestCase'));
    $this->assertEquals('third-test-case', Tag::_chaincase('ThirdTestCase'));
  }

}