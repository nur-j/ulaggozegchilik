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
    Ýüz tutma
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
            ulaggozegchilik.gov.tm
          </th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>
            Edaranyň ady
          </td>
          <td>
            TürkmenPortal
          </td>
        </tr>
        <tr>
          <td>
            Rugsatnama sany
          </td>
          <td>
            20
          </td>
        </tr>
        <tr>
          <td>
            CMR sany
          </td>
          <td>
            12
          </td>
        </tr>
        <tr>
          <td>
            Jogapkär işgär
          </td>
          <td>
            Resul Berdiýew
          </td>
        </tr>
        <tr>
          <td>
            Telefon 
          </td>
          <td>
            +993 6X XXXXXX
          </td>
        </tr>
        <tr>
          <td>
            Email
          </td>
          <td>
            example@mail.com
          </td>
        </tr>
      </tbody>
    </table>
  </main>
  

</body>
</html>

