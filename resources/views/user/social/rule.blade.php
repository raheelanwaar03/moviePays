<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    {{-- Datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/fb965b455a.js" crossorigin="anonymous"></script>
    <title>{{ env('APP_NAME') }}</title>
    <style>
        p {
            color: white;
        }

        h1 {
            color: white;
        }

        h4 {
            color: white;
        }
    </style>
</head>

<body style="background-image: url({{ asset('assets/img/bg.jpg') }});">

    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-md-12 p-3 mt-5" style="background-color: rgb(255, 0, 0)">
                    <a href="{{ route('User.Dashboard') }}" class="text-center text-decoration-none">
                        <div style="float:left;">
                            <img src="{{ asset('assets/logo.png') }}" alt="" height="80px" width="80px">
                        </div>
                        <h3 class="text-center text-white text-decoration-none">Welcome To {{ env('APP_NAME') }}</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row m-3">
            <div class="col-md-12">
                <h1 class="text-white text-center">Rules</h1>

                <p>
                    As an esteemed member of the InvestingPlatform community, we want to ensure that your investment
                    journey is smooth, rewarding, and secure. To maintain a fair and transparent environment for all
                    users, we have established a set of rules that govern the conduct of our platform. These rules not
                    only protect the interests of our users but also uphold the integrity of the financial ecosystem we
                    have built. We kindly request all users to adhere to these rules for a seamless experience:
                </p>

                <h4>
                    Eligibility Criteria:
                </h4>
                <p>
                    Users must meet the minimum age requirement to participate in investments, as per the regulations of
                    their respective country of residence.
                    All information provided during the registration process must be accurate and up-to-date.
                </p>

                <h4>
                    Investment Risks
                </h4>

                <p>
                    Users must acknowledge that investing in financial markets carries inherent risks. The value of
                    investments can go up or down, and past performance is not indicative of future results.
                    It is essential to do thorough research and seek professional advice before making any investment
                    decisions
                </p>

                <h4>
                    Prohibited Activities
                </h4>
                <p>
                    Users are strictly prohibited from engaging in fraudulent activities, market manipulation, or any
                    illegal practices that undermine the integrity of the platform.
                    Impersonation or misrepresentation of identity is strictly forbidden.
                </p>

                <h4>
                    User Conduct
                </h4>

                <p>
                    Respectful and courteous communication is expected between all users, including in forums, chat
                    rooms, and other interactive features.
                    Hate speech, offensive language, or any form of harassment will not be tolerated.
                </p>

                <h4>
                    Security Measures
                </h4>
                <p>
                    Users are responsible for keeping their login credentials and personal information secure. Sharing
                    account details with others is strongly discouraged.
                    In case of suspected unauthorized access to an account, users must immediately notify customer
                    support.
                </p>

                <h4>
                    Compliance with Regulations
                </h4>
                <p>
                    Users must comply with all applicable laws and regulations related to investments and financial
                    transactions with in their jurisdiction.
                </p>

                <h4>
                    Investment Strategies
                </h4>
                <p>
                    Users are free to choose their investment strategies, but they must not manipulate the platform or
                    exploit any technical vulnerabilities.
                </p>
                <h4>
                    Reporting and Feedback
                </h4>
                <p>
                    If users come across any suspicious activities or encounter technical issues, they should promptly
                    report them to customer support.
                    Feedback and suggestions for platform improvement are welcomed and valued.
                </p>

            </div>
        </div>
    </div>
</body>

</html>
