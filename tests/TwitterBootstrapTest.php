<?php
use Eyewill\Tag\TwitterBootstrap as Tag;

class TwitterBootstrapTest extends \PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    Tag::$codeFormat = false;
  }
  protected function tearDown()
  {

  }

  public function testBuild()
  {

  }

  public function testCSS()
  {
    // Overview
    // Not completed yet.
    $this->assertEquals('<div class="container"></div>', (string)Tag::container());

    // Grid system
    $this->assertEquals('<div class="row"></div>', (string)Tag::row());
    $this->assertEquals('<div class="col-xs-1"></div>', (string)Tag::colXs1());
    $this->assertEquals('<div class="col-sm-1"></div>', (string)Tag::colSm1());
    $this->assertEquals('<div class="col-md-1"></div>', (string)Tag::colMd1());
    $this->assertEquals('<div class="col-lg-1"></div>', (string)Tag::colLg1());
    $this->assertEquals('<div class="col-xs-1 col-xs-offset-1"></div>', (string)Tag::colXs1XsOffset1());
    $this->assertEquals('<div class="col-sm-1 col-sm-offset-1"></div>', (string)Tag::colSm1SmOffset1());
    $this->assertEquals('<div class="col-md-1 col-md-offset-1"></div>', (string)Tag::colMd1MdOffset1());
    $this->assertEquals('<div class="col-lg-1 col-lg-offset-1"></div>', (string)Tag::colLg1LgOffset1());
    $this->assertEquals('<div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>', (string)Tag::colXs1Sm2Md3Lg4());
    $this->assertEquals(
      '<div class="col-xs-1 col-sm-2 col-md-3 col-lg-4 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-4"></div>',
      (string)Tag::colXs1Sm2Md3Lg4XsOffset1SmOffset2MdOffset3LgOffset4());

    // Typography
    // Not completed yet.

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



    $this->assertEquals('<textarea class="form-control" name="record[body]" cols="3" rows="9">'."body contents".'</textarea>',
      (string)Tag::textarea('record[body]', "body contents", null, array('cols' => 3, 'rows' => 9)));

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
    $this->assertEquals('<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>', (string)Tag::navbarToggle());
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