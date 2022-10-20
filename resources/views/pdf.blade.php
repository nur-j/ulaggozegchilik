<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta charset="utf-8">
  <title></title>
  <style>
    body {
      font-family: DejaVu Serif;
      margin: 1cm; 
    }
  </style>
</head>
<body>
  <p style="text-align: right; font-weight: bold; margin-top: 5cm">
    &#171;Türkmenulaggözegçilik&#187; <br />
    döwlet kärhanasyna
  </p>
  <p style="margin-top: 3cm">
    &nbsp;&nbsp;&nbsp;&nbsp;&#171;{{ $req['corpname'] }}&#187; hojalyk jemgyýeti, {{ $req['cmr_number'] }} sany Halkara daşalýan ýüküň ýanhatyny (CMR) we {{ $req['permission_number'] }} sany Türkmenistanda ýükleri ýüklemek we üçünji ýurtlara ýükleri daşamak üçin Rugsatnama hem-de olaryň tölegini amala aşyrmak üçin hasap-faktura bermegiňizi haýyş edýär.
  </p>
  <p style="margin-top: 2cm">
    "{{ $req['corpname'] }}" HJ-niň
  </p>
  @php $fn = $req['director_firstname'] @endphp
  <p>Direktory:	______________________   {{ strtoupper(mb_substr($fn, 0, 1)) }}. {{ $req['director_lastname'] }}</p>
</body>
</html>