<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    * {
  box-sizing: border-box;
}

html.open, body.open {
  height: 100%;
  overflow: hidden;
}

html {
  padding: 40px;
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  padding: 20px;
  background-color: #5BB9B8;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
  color: #fff;
  font-size: 16px;
  font-family: 'Lato', sans-serif;
}

p {
  text-align: center;
  margin: 20px 0 60px;
}

main {
  background-color: #2C3845;
}

h1 {
  text-align: center;
  font-weight: 300;
}

table {
  display: table;
}

/* tr, td, tbody, tfoot {
  display: block;
} */

thead {
  display: none;
}

/* tr {
  padding-bottom: 10px;
}
*/
td {
  padding: 10px 10px 0;
  border: 1px solid #28333f;
} 
td:before {
  content: attr(data-title);
  color: #7a91aa;
  text-transform: uppercase;
  font-size: 16px;
  padding-right: 10px;
  display: block;
}

table {
  width: 100%;
}

th {
  text-align: left;
  font-weight: 700;
}

tr>td:first-child {
  width: 40%;
}

thead th {
  background-color: #202932;
  color: #fff;
  border: 1px solid #202932;
}

tfoot th {
  display: block;
  padding: 10px;
  text-align: center;
  color: #b8c4d2;
}

.button {
  line-height: 1;
  display: inline-block;
  font-size: 16px;
  text-decoration: none;
  border-radius: 5px;
  color: #fff;
  padding: 8px;
  background-color: #4b908f;
}

.select {
  padding-bottom: 20px;
  border-bottom: 1px solid #28333f;
}
.select:before {
  display: none;
}



@media (min-width: 460px) {
  td {
    text-align: left;
  }
  /* td:before {
    display: inline-block;
    text-align: right;
    width: 140px;
  } */

}
@media (min-width: 720px) {
  table {
    display: table;
  }

  tr {
    display: table-row;
  }

  td, th {
    display: table-cell;
  }

  tbody {
    display: table-row-group;
  }

  thead {
    display: table-header-group;
  }

  tfoot {
    display: table-footer-group;
  }

  td {
    border: 1px solid #28333f;
  }
  td:before {
    display: none;
  }

  td, th {
    padding: 10px;
  }

  tr:nth-child(2n+2) td {
    background-color: #242e39;
  }

  tfoot th {
    display: table-cell;
  }

  .select {
    padding: 10px;
  }
}

  </style>
</head>
<body>
  <h1>
    ????z tutma
  </h1>
  <main>
    <table>
      {{-- <thead>
        <tr>
          <th>
            Provider Name
          </th>
          <th>
            E-mail
          </th>
        </tr>
      </thead> --}}
      <tfoot>
        <tr>
          <th colspan='3'>
            {{-- $req->email --}}
          </th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>
            Edarany?? ady
          </td>
          <td>
            {{ $req->corpname }}
          </td>
        </tr>
        <tr>
          <td>
            Rugsatnama sany
          </td>
          <td>
            {{ $req->permission_number }}
          </td>
        </tr>
        <tr>
          <td>
            CMR sany
          </td>
          <td>
            {{ $req->cmr_number }}
          </td>
        </tr>
        <tr>
          <td>
            Jogapk??r i??g??r
          </td>
          <td>
            {{ $req->fullname }}
          </td>
        </tr>
        <tr>
          <td>
            Telefon 
          </td>
          <td>
            {{ $req->phone }}
          </td>
        </tr>
        <tr>
          <td>
            Email
          </td>
          <td>
            {{ $req->email }}
          </td>
        </tr>
      </tbody>
    </table>
    <p>????z tutma hatyny?? g??????rmesi: </p>
    <h5>
        @if (isset($req->yuztutma))
          <a target="_blank" href="{{ asset('storage/' . $req->yuztutma) }}">????kle</a>
        @else
          <span style="color: red">Bu fa??l ??ok</span>
        @endif
      </h5>
      <p>Ulag ??? ekspedisi??a i??ini???? - 52.29.22 ki??i g??rn????i esasynda ??Awtomobil ulaglary arkaly ????k da??amagy guramak, ????kleri ekspedisi??a etmek (??any bilen gitmek) i??i?? ????in hereket ed????n ygty??arnamany?? nusgasy: </p>
      <h5>
        @if (isset($req->ygtyyarnama))
          <a target="_blank" href="{{ asset('storage/' . $req->ygtyyarnama) }}">????kle</a>
        @else
          <span style="color: red">Bu fa??l ??ok</span>
        @endif   
      </h5>
      <p>T??rkmenistany?? ??uridik ??ahslaryny?? ??eke-t??k d??wlet sanawy: </p>
      <h5>
        @if (isset($req->dowlet_sanaw))
          <a target="_blank" href="{{ asset('storage/' . $req->dowlet_sanaw) }}">????kle</a>
        @else
          <span style="color: red">Bu fa??l ??ok</span>
        @endif
      </h5>
  </main>
  

</body>
</html>

