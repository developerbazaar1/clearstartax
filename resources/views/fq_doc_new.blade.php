<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Financial Questionnaire</title>
    <meta name="description" content="printdocument">
    <style>
    body {
        margin: 0;
        font-family: 'Open Sans', sans-serif;
    }

    a:hover {
        text-decoration: underline !important;
    }

    .container {
        /*max-width: 670px;*/
        margin: 0 auto;
        padding: 20px;
    }

    .content {
       /* max-width: 670px;*/
        background: #fff;
        border-radius: 3px;
        box-shadow: 0 6px 18px 0 rgba(0, 0, 0, .06);
        padding: 20px;
    }

    h1 {
        color: #1e1e2d;
        font-weight: 400;
        margin: 0;
        font-size: 22px;
        font-family: 'Rubik', sans-serif;
        text-align: center;
    }

    td.value {
        padding: 10px;
        border-bottom: 1px solid #ededed;
        color: #000;
        font-weight: 400;
        text-align: left;
        vertical-align: middle;
        height: 26px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 10px;
        border-bottom: 1px solid #ededed;
        color: #000;
        font-weight: 600;
        text-align: left;
        vertical-align: middle;
        height: 26px;
        width:50%;
    }

    .signature {
        width: 90%;
    }

    .email {
        text-decoration: none;
        /* color: #000; */
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>Financial Questionnaire</h1>
            <span class="divider"></span>
            <table>
                <tbody>
                    <!-- :: tr01 refrence no.-->
                    @foreach($formData as $key => $value)
                      <!-- @php $formattedKey = str_replace('_', ' ', $key); @endphp -->
                        <tr>
                            <td class="field">{{ $key }} </td>
                            <td class="value">{{ $value }}</td>
                        </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>