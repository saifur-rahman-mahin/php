<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Tables Examples</title>
  <style>
    /* Basic Level Table Styles */
    table.basic {
      border: 1px solid #000;
      margin-bottom: 20px;
    }

    table.basic th, table.basic td {
      border: 1px solid #000;
      padding: 8px;
    }

    /* Mid-Level Table Styles */
    table.mid {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    table.mid th, table.mid td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    table.mid th {
      background-color: #f2f2f2;
    }

    table.mid tr:hover {
      background-color: #f5f5f5;
    }

    /* Advanced Level Table Styles */
    table.advanced {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    table.advanced th, table.advanced td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    table.advanced th {
      background-color: #4CAF50;
      color: white;
    }

    table.advanced tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    table.advanced tr:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>

  <!-- Basic Level Table -->
  <table class="basic">
    <tr>
      <th>Basic Header 1</th>
      <th>Basic Header 2</th>
    </tr>
    <tr>
      <td>Basic Data 1</td>
      <td>Basic Data 2</td>
    </tr>
    <tr>
      <td>Basic Data 3</td>
      <td>Basic Data 4</td>
    </tr>
  </table>

  <!-- Mid-Level Table -->
  <table class="mid">
    <thead>
      <tr>
        <th>Mid Header 1</th>
        <th>Mid Header 2</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mid Data 1</td>
        <td>Mid Data 2</td>
      </tr>
      <tr>
        <td>Mid Data 3</td>
        <td>Mid Data 4</td>
      </tr>
    </tbody>
  </table>

  <!-- Advanced Level Table -->
  <table class="advanced">
    <thead>
      <tr>
        <th>Advanced ID</th>
        <th>Name</th>
        <th>Position</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>John Doe</td>
        <td>Developer</td>
        <td>$70,000</td>
      </tr>
      <tr>
        <td>002</td>
        <td>Jane Smith</td>
        <td>Designer</td>
        <td>$65,000</td>
      </tr>
      <tr>
        <td>003</td>
        <td>Bob Johnson</td>
        <td>Manager</td>
        <td>$80,000</td>
      </tr>
    </tbody>
  </table>


  <table class="basic">
  <thead>
    <tr>
      <th>Header 1</th>
      <th>Header 2</th>
      <th>Header 3</th>
      <th>Header 4</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>Data 1</td>
      <td>Data 2</td>
      <td>Data 3</td>
      <td>Data 3</td>
      <td>Data 3</td>
      <td>Data 3</td>
      <td>Data 3</td>
    </tr>

    <tr>
      <td>Data 1</td>
      <td>Data 2</td>
      <td>Data 3</td>
      <td>Data 3</td>
      <td>Data 3</td>
      <td>Data 3</td>
      <td>Data 3</td>
    </tr>
  </tbody>
</table>


</body>
</html>
