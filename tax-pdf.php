<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    form>h2 {
        color: #0094ff;
    }

    form>p:first-child {
        font-size: large;
    }

    .createPDF {
        font-size: 14px;
    }

    td.field {
        font-weight: 700;
    }
    </style>
</head>

<body class="container">
    <div id="element-to-print">


        <!-- Sample Table -->
        <form class="form">
            <h2>Tax Organizer</h2>
            <h3>A bit about this </h3>


            <!-- Add a two-column table -->
            <table>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="field">Reference #</td>
                    <td class="value">16777587</td>
                </tr>
                <tr>
                    <td class="field">Reference #</td>
                    <td class="value">16777587</td>
                </tr>
                <tr>
                    <td class="field">Reference #</td>
                    <td class="value">16777587</td>
                </tr>
                <tr>
                    <td class="field">Reference #</td>
                    <td class="value">16777587</td>
                </tr>
                <tr>
                    <td class="field">Reference #</td>
                    <td class="value">16777587</td>
                </tr>
                <!-- You can add more rows as needed -->
            </table>
        </form>
        <br><br>
    </div>
</body>

</html>