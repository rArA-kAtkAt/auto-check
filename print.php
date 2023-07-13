<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div class="page-header" style="text-align: center">
    I'm The Header
    <br/>
    <button type="button" onClick="window.print()" style="background: pink">
      PRINT ME!
    </button>
  </div>

  <div class="page-footer">
    I'm The Footer
  </div>

  <table>

    <thead>
      <tr>
        <td>
          <!--place holder for the fixed-position header-->
          <div class="page-header-space"></div>
        </td>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>
          <!--*** CONTENT GOES HERE ***-->
          <div class="page">PAGE 1</div>
          <div class="page">PAGE 2</div>
          <div class="page" style="line-height: 3;">
            PAGE 3 - Long Content
          
          </div>
        </td>
      </tr>
    </tbody>

    <tfoot>
      <tr>
        <td>
          <!--place holder for the fixed-position footer-->
          <div class="page-footer-space"></div>
        </td>
      </tr>
    </tfoot>

  </table>

</body>

</html>