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
    $this->assertEquals('<meta name="viewport" content="width=device-width, initial-scale=1.0">',
      (string)Tag::viewport());
    $this->assertEquals('<!DOCTYPE html>', (string)Tag::getDocType());
    $this->assertEquals('<html lang="en"></html>', (string)Tag::html());
    $this->assertEquals('<html lang="ja" hoge="fuga"></html>', (string)Tag::html('ja', array('hoge' => 'fuga')));
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
    $this->assertEquals(
      '<div class="form-group">'.
        '<label for="record_email">Email address</label>'.
        '<input type="email" class="form-control" name="record[email]" placeholder="Enter email" id="record_email">'.
      '</div>',
      (string)Tag::formGroup(
        Tag::label('Email address')->for('record_email'),
        Tag::formEmail('record[email]', null, 'Enter email')->id('record_email')
      )
    );
    $this->assertEquals('<form class="form-inline" role="form"></form>', (string)Tag::formInline());
    $this->assertInstanceOf('Primalbase\TwitterBootstrap\CSS\Forms', Tag::srOnly());
    $this->assertEquals('<label class="sr-only" for="record_tel">Telephone number</label>', (string)Tag::srOnly('record_tel', 'Telephone number'));
    $this->assertEquals('<form class="form-inline" role="form"><div class="form-group"><label class="sr-only" for="record_tel"></label></div></form>',
      (string)Tag::formInline(Tag::formGroup()->append(Tag::srOnly('record_tel')))
    );

    // CSS/Form/Inline form

    $this->assertEquals('<form class="form-inline" role="form"></form>', (string)Tag::formInline());
    $this->assertEquals(
     '<div class="form-group">'.
     '<label class="sr-only" for="exampleInputEmail2">Email address</label>'.
     '<input type="email" class="form-control" placeholder="Enter email" id="exampleInputEmail2">'.
     '</div>',
      (string)Tag::formGroup(
        Tag::srOnly('exampleInputEmail2', 'Email address'),
        Tag::formEmail(null,null, 'Enter email')->id('exampleInputEmail2')
      )
    );

    // Css/Form/Horizontal form

    $this->assertEquals('<form class="form-horizontal" role="form"></form>', (string)Tag::formHorizontal());
    $this->assertEquals(
      '<div class="form-group">'.
      '<label class="control-label col-sm-2">Email</label>'.
      '<div class="col-sm-10">'.
      '<input type="email" class="form-control" placeholder="Email" id="inputEmail3">'.
      '</div>'.
      '</div>',
      (string)Tag::formGroup(
        Tag::controlLabel('Email')->sm(2),
        Tag::colSm(10, Tag::formEmail(null, null, 'Email')->id('inputEmail3'))
      )
    );

    // CSS/Forms/Supported controls/Inputs

    // form text
    $this->assertEquals('<input type="text" class="form-control">', (string)Tag::formText());
    $this->assertEquals(
      '<input type="text" class="form-control" name value placeholder>',
      (string)Tag::formText(true, true, true));
    $this->assertEquals(
      '<input type="text" class="form-control" name="record[name]" placeholder="text here" id="record_name">',
      (string)Tag::formText('record[name]', null, 'text here', array('id' => 'record_name'))
    );
    $this->assertEquals(
      '<input type="text" class="form-control" name="record[name]" placeholder="text here" id="record_name" required>',
      (string)Tag::formTextRequired('record[name]', null, 'text here', array('id' => 'record_name'))
    );
    $this->assertEquals(
      '<input type="text" class="form-control" name="record[name]" placeholder="text here" disabled>',
      (string)Tag::formTextDisabled('record[name]', null, 'text here')
    );

    // form hidden
    $this->assertEquals('<input type="hidden">', (string)Tag::formHidden());
    $this->assertEquals(
      '<input type="hidden" name="record[csrf]" value="hogefuga">',
      (string)Tag::formHidden('record[csrf]', 'hogefuga')
    );
    $this->assertEquals(
      '<input type="hidden" name="record[csrf]" value="hogefuga" disabled>',
      (string)Tag::formHiddenDisabled('record[csrf]', 'hogefuga')
    );

    // form search
    $this->assertEquals('<input type="search" class="form-control">', (string)Tag::formSearch());
    $this->assertEquals(
      '<input type="search" class="form-control" name="record[search]" placeholder="search now">',
      (string)Tag::formSearch('record[search]', null, 'search now')
    );
    $this->assertEquals(
      '<input type="search" class="form-control" name="record[search]" placeholder="search now" required>',
      (string)Tag::formSearchRequired('record[search]', null, 'search now')
    );
    $this->assertEquals(
      '<input type="search" class="form-control" name="record[search]" placeholder="search now" disabled>',
      (string)Tag::formSearchDisabled('record[search]', null, 'search now')
    );

    // form tel
    $this->assertEquals('<input type="tel" class="form-control">', (string)Tag::formTel());
    $this->assertEquals(
      '<input type="tel" class="form-control" name="record[tel]" placeholder="xxx-xxxx-xxxx">',
      (string)Tag::formTel('record[tel]', null, 'xxx-xxxx-xxxx')
    );
    $this->assertEquals(
      '<input type="tel" class="form-control" name="record[tel]" placeholder="xxx-xxxx-xxxx" required>',
      (string)Tag::formTelRequired('record[tel]', null, 'xxx-xxxx-xxxx')
    );
    $this->assertEquals(
      '<input type="tel" class="form-control" name="record[tel]" placeholder="xxx-xxxx-xxxx" disabled>',
      (string)Tag::formTelDisabled('record[tel]', null, 'xxx-xxxx-xxxx')
    );

    // form url
    $this->assertEquals('<input type="url" class="form-control">', (string)Tag::formUrl());
    $this->assertEquals(
      '<input type="url" class="form-control" name="record[url]" placeholder="http://www.hoge.jp">',
      (string)Tag::formUrl('record[url]', null, 'http://www.hoge.jp')
    );
    $this->assertEquals(
      '<input type="url" class="form-control" required>',
      (string)Tag::formUrlRequired()
    );
    $this->assertEquals(
      '<input type="url" class="form-control" disabled>',
      (string)Tag::formUrlDisabled()
    );

    // form email
    $this->assertEquals('<input type="email" class="form-control">', (string)Tag::formEmail());
    $this->assertEquals(
      '<input type="email" class="form-control" name="record[email]" value="hoge@fuga.jp" placeholder="mail address here" id="record_email">',
      (string)Tag::formEmail('record[email]', 'hoge@fuga.jp', 'mail address here')->id('record_email')
    );
    $this->assertEquals(
      '<input type="email" class="form-control" required>',
      (string)Tag::formEmailRequired()
    );
    $this->assertEquals(
      '<input type="email" class="form-control" disabled>',
      (string)Tag::formEmailDisabled()
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
    $this->assertEquals(
      '<input type="password" class="form-control" name="record[password]" value="password" placeholder="password here" disabled>',
      (string)Tag::formPasswordDisabled('record[password]', 'password', 'password here')
    );

    // form datetime
    $this->assertEquals('<input type="datetime" class="form-control">', (string)Tag::formDatetime());
    $this->assertEquals(
      '<input type="datetime" class="form-control" name="record[datetime]" value="2013-11-07T22:55:00" min="1980-01-01T00:00:00" max="2045-12-31T23:59:59" step="300">',
      (string)Tag::formDatetime('record[datetime]', '2013-11-07T22:55:00', '1980-01-01T00:00:00', '2045-12-31T23:59:59', 300)
    );
    $this->assertEquals(
      '<input type="datetime" class="form-control" name="record[datetime]" value="2013-11-07T22:55:00" min="1980-01-01T00:00:00" max="2045-12-31T23:59:59" step="300" required>',
      (string)Tag::formDatetimeRequired('record[datetime]', '2013-11-07T22:55:00', '1980-01-01T00:00:00', '2045-12-31T23:59:59', 300)
    );
    $this->assertEquals(
      '<input type="datetime" class="form-control" name="record[datetime]" value="2013-11-07T22:55:00" min="1980-01-01T00:00:00" max="2045-12-31T23:59:59" step="300" disabled>',
      (string)Tag::formDatetimeDisabled('record[datetime]', '2013-11-07T22:55:00', '1980-01-01T00:00:00', '2045-12-31T23:59:59', 300)
    );

    // form datetime-local
    $this->assertEquals('<input type="datetime-local" class="form-control">', (string)Tag::formDatetimeLocal());
    $this->assertEquals(
      '<input type="datetime-local" class="form-control" name="record[datetime-local]" value="2013-11-07T22:55:00" min="1980-01-01T00:00:00" max="2045-12-31T23:59:59" step="300">',
      (string)Tag::formDatetimeLocal('record[datetime-local]', '2013-11-07T22:55:00', '1980-01-01T00:00:00', '2045-12-31T23:59:59', 300)
    );
    $this->assertEquals(
      '<input type="datetime-local" class="form-control" name="record[datetime-local]" value="2013-11-07T22:55:00" min="1980-01-01T00:00:00" max="2045-12-31T23:59:59" step="300" required>',
      (string)Tag::formDatetimeLocalRequired('record[datetime-local]', '2013-11-07T22:55:00', '1980-01-01T00:00:00', '2045-12-31T23:59:59', 300)
    );
    $this->assertEquals(
      '<input type="datetime-local" class="form-control" name="record[datetime-local]" value="2013-11-07T22:55:00" min="1980-01-01T00:00:00" max="2045-12-31T23:59:59" step="300" disabled>',
      (string)Tag::formDatetimeLocalDisabled('record[datetime-local]', '2013-11-07T22:55:00', '1980-01-01T00:00:00', '2045-12-31T23:59:59', 300)
    );

    // form date
    $this->assertEquals('<input type="date" class="form-control">', (string)Tag::formDate());
    $this->assertEquals(
      '<input type="date" class="form-control" name="record[date]" value="2013-11-07" min="1980-01-01" max="2045-12-31" step="1">',
      (string)Tag::formDate('record[date]', '2013-11-07', '1980-01-01', '2045-12-31', 1)
    );
    $this->assertEquals(
      '<input type="date" class="form-control" name="record[date]" value="2013-11-07" min="1980-01-01" max="2045-12-31" step="1" required>',
      (string)Tag::formDateRequired('record[date]', '2013-11-07', '1980-01-01', '2045-12-31', 1)
    );
    $this->assertEquals(
      '<input type="date" class="form-control" name="record[date]" value="2013-11-07" min="1980-01-01" max="2045-12-31" step="1" disabled>',
      (string)Tag::formDateDisabled('record[date]', '2013-11-07', '1980-01-01', '2045-12-31', 1)
    );

    // form month
    $this->assertEquals('<input type="month" class="form-control">', (string)Tag::formMonth());
    $this->assertEquals(
      '<input type="month" class="form-control" name="record[month]" value="2013-11" min="1980-01" max="2045-12" step="1">',
      (string)Tag::formMonth('record[month]', '2013-11', '1980-01', '2045-12', 1)
    );
    $this->assertEquals(
      '<input type="month" class="form-control" name="record[month]" value="2013-11" min="1980-01" max="2045-12" step="1" required>',
      (string)Tag::formMonthRequired('record[month]', '2013-11', '1980-01', '2045-12', 1)
    );
    $this->assertEquals(
      '<input type="month" class="form-control" name="record[month]" value="2013-11" min="1980-01" max="2045-12" step="1" disabled>',
      (string)Tag::formMonthDisabled('record[month]', '2013-11', '1980-01', '2045-12', 1)
    );

    // form week
    $this->assertEquals('<input type="week" class="form-control">', (string)Tag::formWeek());
    $this->assertEquals(
      '<input type="week" class="form-control" name="record[week]" value="2013W11" min="1980W01" max="2045W12" step="1">',
      (string)Tag::formWeek('record[week]', '2013W11', '1980W01', '2045W12', 1)
    );
    $this->assertEquals(
      '<input type="week" class="form-control" name="record[week]" value="2013W11" min="1980W01" max="2045W12" step="1" required>',
      (string)Tag::formWeekRequired('record[week]', '2013W11', '1980W01', '2045W12', 1)
    );
    $this->assertEquals(
      '<input type="week" class="form-control" name="record[week]" value="2013W11" min="1980W01" max="2045W12" step="1" disabled>',
      (string)Tag::formWeekDisabled('record[week]', '2013W11', '1980W01', '2045W12', 1)
    );

    // form time
    $this->assertEquals('<input type="time" class="form-control">', (string)Tag::formTime());
    $this->assertEquals(
      '<input type="time" class="form-control" name="record[time]" value="12:00:00" min="00:00:00" max="23:59:59" step="1">',
      (string)Tag::formTime('record[time]', '12:00:00', '00:00:00', '23:59:59', 1)
    );
    $this->assertEquals(
      '<input type="time" class="form-control" name="record[time]" value="12:00:00" min="00:00:00" max="23:59:59" step="1" required>',
      (string)Tag::formTimeRequired('record[time]', '12:00:00', '00:00:00', '23:59:59', 1)
    );
    $this->assertEquals(
      '<input type="time" class="form-control" name="record[time]" value="12:00:00" min="00:00:00" max="23:59:59" step="1" disabled>',
      (string)Tag::formTimeDisabled('record[time]', '12:00:00', '00:00:00', '23:59:59', 1)
    );

    // form number
    $this->assertEquals('<input type="number" class="form-control">', (string)Tag::formNumber());
    $this->assertEquals(
      '<input type="number" class="form-control" name="record[number]" value="50" min="0" max="100" step="any">',
      (string)Tag::formNumber('record[number]', '50', '0', '100', 'any')
    );
    $this->assertEquals(
      '<input type="number" class="form-control" name="record[number]" value="50" min="0" max="100" step="any" required>',
      (string)Tag::formNumberRequired('record[number]', '50', '0', '100', 'any')
    );
    $this->assertEquals(
      '<input type="number" class="form-control" name="record[number]" value="50" min="0" max="100" step="any" disabled>',
      (string)Tag::formNumberDisabled('record[number]', '50', '0', '100', 'any')
    );

    // form range
    $this->assertEquals('<input type="range">', (string)Tag::formRange());
    $this->assertEquals(
      '<input type="range" name="record[range]" value="50" min="0" max="100" step="any" data-range="50">',
      (string)Tag::formRange('record[range]', '50', '0', '100', 'any', array('data-range' => '50'))
    );
    $this->assertEquals(
      '<input type="range" name="record[range]" value="50" min="0" max="100" step="any" required>',
      (string)Tag::formRangeRequired('record[range]', '50', '0', '100', 'any')
    );
    $this->assertEquals(
      '<input type="range" name="record[range]" value="50" min="0" max="100" step="any" disabled>',
      (string)Tag::formRangeDisabled('record[range]', '50', '0', '100', 'any')
    );

    // form color
    $this->assertEquals('<input type="color" class="form-control">', (string)Tag::formColor());
    $this->assertEquals(
      '<input type="color" class="form-control" name="record[color]" value="#000000" data-color="#FFFFFF">',
      (string)Tag::formColor('record[color]', '#000000', array('data-color' => '#FFFFFF'))
    );
    $this->assertEquals(
      '<input type="color" class="form-control" name="record[color]" value="#000000" required>',
      (string)Tag::formColorRequired('record[color]', '#000000')
    );
    $this->assertEquals(
      '<input type="color" class="form-control" name="record[color]" value="#000000" disabled>',
      (string)Tag::formColorDisabled('record[color]', '#000000')
    );

    // textarea
    $this->assertInstanceOf('Primalbase\TwitterBootstrap\CSS\Forms', Tag::formTextarea());
    $this->assertEquals('<textarea class="form-control"></textarea>', (string)Tag::formTextarea());
    $this->assertEquals(
      '<textarea class="form-control" name="record[body]" rows="3">'.
        'body contents'.
      '</textarea>',
      (string)Tag::formTextarea('record[body]', 3, 'body contents', null)
    );
    $this->assertEquals(
      '<textarea class="form-control" name="record[body]" rows="9" placeholder="body contents here" required>'.
        'body contents'.
      '</textarea>',
      (string)Tag::formTextareaRequired('record[body]', 9, 'body contents', 'body contents here')
    );
    $this->assertEquals(
      '<textarea class="form-control" name="record[body]" rows="9" placeholder="body contents here" disabled>'.
      'body contents'.
      '</textarea>',
      (string)Tag::formTextareaDisabled('record[body]', 9, 'body contents', 'body contents here')
    );

    // form file
    $this->assertEquals('<input type="file">', (string)Tag::formFile());
    $this->assertEquals(
      '<input type="file" name="file1" accept="image/*">',
      (string)Tag::formFile('file1', 'image/*')
    );
    $this->assertEquals(
      '<input type="file" name="file2" multiple required>',
      (string)Tag::formFileMultipleRequired('file2')
    );
    $this->assertEquals(
      '<input type="file" name="file2" multiple disabled>',
      (string)Tag::formFileMultipleDisabled('file2')
    );

    // checkboxes and radios

    // default(stacked)
    $this->assertEquals(
      '<div class="checkbox">'.
        '<label>'.
          '<input type="checkbox" value="">'.
          'Option one is this and that&#039;be sure to include why it&#039;s great'.
        '</label>'.
      '</div>',
      (string)Tag::checkbox(
        Tag::formCheckbox(null, ''),
        'Option one is this and that\'be sure to include why it\'s great'
      )
    );
    $this->assertEquals(
      '<div class="radio">'.
        '<label>'.
          '<input type="radio" name="optionsRadios" value="option1" checked id="optionsRadios1">'.
          'Option one is this and that&#039;be sure to include why it&#039;s great'.
        '</label>'.
      '</div>',
      (string)Tag::radio(
        Tag::formRadio('optionsRadios', 'option1', true)->id('optionsRadios1'),
        'Option one is this and that\'be sure to include why it\'s great'
      )
    );

    // inline checkboxes
    $this->assertEquals(
      '<label class="radio-inline">'.
        '<input type="radio" name="optionsRadios" value="option1" id="inlineRadio1"> 1'.
      '</label>',
      (string)Tag::radioInline(
        Tag::formRadio('optionsRadios', 'option1')->id('inlineRadio1'),
        ' 1'
      )
    );
    $this->assertEquals(
      '<label class="checkbox-inline">'.
      '<input type="checkbox" value="option1" id="inlineCheckbox1"> 1'.
      '</label>',
      (string)Tag::checkboxInline(
        Tag::formCheckbox(null, 'option1')->id('inlineCheckbox1'),
        ' 1'
      )
    );

    // radio and checkbox options
    $this->assertEquals('<input type="checkbox" required>', (string)Tag::formCheckboxRequired());
    $this->assertEquals('<input type="radio" required>', (string)Tag::formRadioRequired());
    $this->assertEquals('<input type="checkbox" disabled>', (string)Tag::formCheckboxDisabled());
    $this->assertEquals('<input type="radio" disabled>', (string)Tag::formRadioDisabled());

    // Selects
    $this->assertEquals(
      '<select class="form-control">'.
        '<option></option>'.
        '<option value="1" selected>value 1</option>'.
        '<option>2</option>'.
        '<option>3</option>'.
        '<option>4</option>'.
        '<option>5</option>'.
        '<option value="b">a</option>'.
      '</select>',
      (string)Tag::formSelect(array(
        null,
        array('value 1', array('value' => '1', 'selected' => true)),
        Tag::option('2'),
        '3',
        '4',
        '5',
        'a' => 'b',
      ))
    );
    $this->assertEquals(
      '<optgroup label="hoge"></optgroup>',
      (string)Tag::optgroup('hoge')
    );
    $this->assertEquals(
      '<select class="form-control">'.
        '<option></option>'.
        '<optgroup label="hoge">'.
          '<option value="1" selected>value 1</option>'.
          '<option>2</option>'.
          '<option>3</option>'.
        '</optgroup>'.
        '<optgroup label="fuga">'.
          '<option>4</option>'.
          '<option>5</option>'.
          '<option value="b">a</option>'.
        '</optgroup>'.
      '</select>',
      (string)Tag::formSelect(array(
        null,
        Tag::optgroup('hoge', array(
          array('value 1', array('value' => '1', 'selected' => true)),
          Tag::option('2'),
          '3'
        )),
        Tag::optgroup('fuga', array(
          '4',
          '5',
          'a' => 'b',
        ))
      ))
    );
    $this->assertEquals(
      '<select class="form-control" multiple required>'.
        '<option value="value1" selected>label1</option>'.
        '<option value="value2">label2</option>'.
      '</select>',
      (string)Tag::formSelectMultipleRequired(array(
        Tag::optionSelected('label1', 'value1'),
        Tag::option('label2', 'value2')->selected(false),
      ))
    );
    $this->assertEquals(
      '<select class="form-control" disabled></select>',
      (string)Tag::formSelectDisabled()
    );

    // static control
    $this->assertEquals(
      '<p class="form-control-static">email@example.com</p>',
      (string)Tag::formStatic('email@example.com')
    );

    // Control states
    $this->assertEquals('<fieldset></fieldset>', (string)Tag::fieldset());
    $this->assertEquals('<fieldset disabled></fieldset>', (string)Tag::fieldsetDisabled());

    // Validation states
    $this->assertEquals(
      '<div class="form-group has-success">'.
        '<label class="control-label" for="inputSuccess">Input with success</label>'.
        '<input type="text" class="form-control" id="inputSuccess">'.
      '</div>',
      (string)Tag::formGroup(
        Tag::controlLabel('Input with success')->for('inputSuccess'),
        Tag::formText()->id('inputSuccess')
      )->hasSuccess()
    );
    $this->assertEquals(
      '<div class="form-group has-warning">'.
        '<label class="control-label" for="inputWarning">Input with warning</label>'.
        '<input type="text" class="form-control" id="inputWarning">'.
      '</div>',
      (string)Tag::formGroup(
        Tag::controlLabel('Input with warning')->for('inputWarning'),
        Tag::formText()->id('inputWarning')
      )->hasWarning()
    );
    $this->assertEquals(
      '<div class="form-group has-error">'.
        '<label class="control-label" for="inputError">Input with error</label>'.
        '<input type="text" class="form-control" id="inputError">'.
      '</div>',
      (string)Tag::formGroup(
        Tag::controlLabel('Input with error')->for('inputError'),
        Tag::formText()->id('inputError')
      )->hasError()
    );

    // Control Sizing
    $this->assertEquals(
      '<input type="text" class="form-control input-lg" placeholder=".input-lg">',
      (string)Tag::formText(null, null, '.input-lg')->inputLg()
    );
    $this->assertEquals(
      '<input type="text" class="form-control input-sm" placeholder=".input-sm">',
      (string)Tag::formText(null, null, '.input-sm')->inputSm()
    );
    $this->assertEquals(
      '<select class="form-control input-lg">...</select>',
      (string)Tag::formSelect(null, '...')->inputLg()
    );

    // Help text
    $this->assertEquals(
      '<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>',
      (string)Tag::helpBlock('A block of help text that breaks onto a new line and may extend beyond one line.')
    );

  }

  /**
   * @todo Not implemented yet.
   */
  public function testCSSButtons()
  {
    $this->assertEquals(
      '<input type="submit" class="btn btn-default" value="Submit">',
      (string)Tag::btnSubmit('Submit'),
      'btnSubmit()'
    );
    $this->assertEquals(
      '<input type="image" src="hoge" alt="fuga">',
      (string)Tag::btnImage('hoge', 'fuga'),
      'btnImage(\'hoge\', \'fuga\')'
    );
    $this->assertEquals(
      '<input type="reset" class="btn btn-default" value="Reset">',
      (string)Tag::btnReset('Reset'),
      "btnReset('Reset')"
    );
    $this->assertEquals(
      '<button type="button" class="btn btn-default"></button>',
      (string)Tag::btn()
    );
    $this->assertEquals(
      '<button type="button" class="btn btn-default">Button</button>',
      (string)Tag::btnDefault('Button')
    );
    $this->assertEquals(
      '<button type="button" class="btn btn-primary">Primary Button</button>',
      (string)Tag::btnPrimary('Primary Button')
    );
    $this->assertEquals(
      '<button type="button" class="btn btn-success">Success Button</button>',
      (string)Tag::btnSuccess('Success Button')
    );
    $this->assertEquals(
      '<button type="button" class="btn btn-info">Info Button</button>',
      (string)Tag::btnInfo('Info Button')
    );
    $this->assertEquals(
      '<button type="button" class="btn btn-warning">Warning Button</button>',
      (string)Tag::btnWarning('Warning Button')
    );
    $this->assertEquals(
      '<button type="button" class="btn btn-danger">Danger Button</button>',
      (string)Tag::btnDanger('Danger Button')
    );
    $this->assertEquals(
     '<button type="button" class="btn btn-link">Link Button</button>',
     (string)Tag::btnLink('Link Button')
    );

    // Sizes
    $this->assertEquals(
      '<button type="button" class="btn btn-primary btn-lg">Large button</button>',
      (string)Tag::btnPrimaryLg('Large button'),
      'btnPrimaryLg()'
    );
    $this->assertEquals(
      '<button type="button" class="btn btn-default btn-lg">Large button</button>',
      (string)Tag::btnDefaultLg('Large button'),
      'btnLg()'
    );

    $this->assertEquals(
      '<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>',
      (string)Tag::btnPrimaryLgBlock('Block level button'),
      "Tag::btnPrimaryLgBlock('Block level button')"
    );

    $this->assertEquals(
      '<button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>',
      (string)Tag::btnDefaultLgBlock('Block level button'),
      "Tag::btnLgBlock('Block level button')"
    );

    $this->assertEquals(
      '<button type="button" class="btn btn-primary btn-lg active">Primary button</button>',
      (string)Tag::btnPrimaryLgActive('Primary button'),
      "Tag::btnPrimaryLgActive('Primary button')"
    );

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

  /**
   * @todo Not implemented yet.
   */
  public function __________________testComponents()
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