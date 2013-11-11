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
      (string)Tag::inputRequired('user')
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

  /**
   * @todo Not completed yet.
   */
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

  public function testCSSOther()
  {
    // Code
    // Not completed yet.

    // Table
    // Not completed yet.

    // Forms
    // Not completed yet.
    // Last implement a input search.
    $this->assertEquals('<input type="text" class="form-control">',
      (string)Tag::input());
    $this->assertEquals('<input type="text" class="form-control">',
      (string)Tag::input(null, null, null));
    $this->assertEquals('<input type="text" class="form-control" name="record[name]" placeholder="text here" id="record_name">',
      (string)Tag::input('record[name]', null, 'text here', array('id' => 'record_name')));
    $this->assertEquals('<input type="text" class="form-control" name="record[name]" placeholder="text here" id="record_name" required>',
      (string)Tag::inputRequired('record[name]', null, 'text here', array('id' => 'record_name')));
    $this->assertEquals('<input type="hidden" name="record[csrf]" value="hogefuga">',
      (string)Tag::inputHidden('record[csrf]', 'hogefuga'));
    $this->assertEquals('<input type="search" class="form-control" name="record[search]" placeholder="search now">',
      (string)Tag::inputSearch('record[search]', null, 'search now'));
    $this->assertEquals('<input type="search" class="form-control" name="record[search]" placeholder="search now" required>',
      (string)Tag::inputSearchRequired('record[search]', null, 'search now'));
    $this->assertEquals('<input type="tel" class="form-control" name="record[tel]" placeholder="xxx-xxxx-xxxx">',
      (string)Tag::inputTel('record[tel]', null, 'xxx-xxxx-xxxx'));
    $this->assertEquals('<input type="tel" class="form-control" name="record[tel]" placeholder="xxx-xxxx-xxxx" required>',
      (string)Tag::inputTelRequired('record[tel]', null, 'xxx-xxxx-xxxx'));
    $this->assertEquals('<input type="url" class="form-control" name="record[url]" placeholder="http://www.hoge.jp">',
      (string)Tag::inputUrl('record[url]', null, 'http://www.hoge.jp'));
    $this->assertEquals('<input type="url" class="form-control" required>',
      (string)Tag::inputUrlRequired());
    $this->assertEquals('<input type="email" class="form-control" name="record[email]" value="hoge@fuga.jp" placeholder="mail address here" id="record_email">',
      (string)Tag::inputEmail('record[email]', 'hoge@fuga.jp', 'mail address here')->id('record_email'));
    $this->assertEquals('<input type="email" class="form-control" required>',
      (string)Tag::inputEmailRequired(null, null, null));
    $this->assertEquals('<input type="password" class="form-control" name="record[password]" value="password" placeholder="password here">',
      (string)Tag::inputPassword('record[password]', 'password', 'password here'));
    $this->assertEquals('<input type="password" class="form-control" name="record[password]" value="password" placeholder="password here" required>',
      (string)Tag::inputPasswordRequired('record[password]', 'password', 'password here'));
    $this->assertEquals('<input type="datetime" class="form-control">',
      (string)Tag::inputDatetime());
    $this->assertEquals('<input type="datetime" class="form-control" name="record[datetime]" value="2013-11-07T22:55:00" min="1980-01-01T00:00:00" max="2045-12-31T23:59:59" step="300" required>',
      (string)Tag::inputDatetimeRequired('record[datetime]', '2013-11-07T22:55:00', '1980-01-01T00:00:00', '2045-12-31T23:59:59', 300));



    $this->assertEquals(
      '<textarea class="form-control" name="record[body]" cols="3" rows="9">'."body contents".'</textarea>',
      (string)Tag::textarea('record[body]', "body contents", null, array('cols' => 3, 'rows' => 9))
    );

    $this->assertEquals('<div class="form-group"></div>', (string)Tag::formGroup());
    $this->assertEquals('<div class="form-group"><label for="record_email">Email address</label><input type="email" class="form-control" id="record_email" name="record[email]" placeholder="Enter email"></div>',
      (string)Tag::formGroup(array(
        'type'        => 'email',
        'id'          => 'record_email',
        'name'        => 'record[email]',
        'label'       => 'Email address',
        'placeholder' => 'Enter email',
      ))
    );
    $this->assertEquals('<form role="form"></form>', (string)Tag::form());
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