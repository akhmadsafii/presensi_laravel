<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}" />
    <style>
        :root {
            --primary-color: #FF6B00;
            --secondary-color: #333;
            --background-color: #ffffff;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --gradient: linear-gradient(135deg, #FF6B00, #ff8533);
        }

        body {
            background-color: #f5f5f5;
            font-family: 'Poppins', sans-serif;
        }

        .box {
            background: var(--background-color);
            box-shadow: 0 15px 35px var(--shadow-color);
            border-radius: 25px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            margin: 2rem;
        }

        .inner-box {
            display: flex;
            align-items: stretch;
        }

        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem 0;
        }

        .logo img {
            height: 87px;
            width: auto;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .logo img:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .logo h4 {
            font-size: 2.2em;
            margin: 15px 0 8px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .logo .subtitle {
            /* font-size: 1.1em; */
            color: #666;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-weight: 500;
            text-align: center;
        }

        .heading h2 {
            font-size: 2em;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            text-align: center;
            margin-bottom: 0px;
            ;
        }

        .input-wrap {
            position: relative;
            margin: 1.5rem 0;
        }

        .sign-btn {
            width: 100%;
            background: var(--gradient);
            border: none;
            border-radius: 12px;
            color: #fff;
            font-size: 1.1em;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .sign-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 0, 0.3);
        }

        .carousel {
            background: var(--gradient);
            padding: 3rem;
            color: #fff;
        }

        .text-slider h2 {
            font-weight: 700;
            line-height: 1.4;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .bullets {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .bullets span {
            width: 8px;
            height: 8px;
            margin: 0 5px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .bullets span.active {
            width: 25px;
            border-radius: 10px;
            background: #fff;
        }

        .alert {
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 12px;
            font-size: 0.9em;
            animation: slideIn 0.5s ease-out;
        }

        .alert-danger {
            background-color: #fff5f5;
            color: #dc2626;
            border: 1px solid #fecaca;
        }

        @media (max-width: 768px) {
            .box {
                margin: 1rem;
            }

            .inner-box {
                flex-direction: column;
            }

            .logo h4 {
                font-size: 1.8em;
            }

            .heading h2 {
                font-size: 1.6em;
            }

            .carousel {
                padding: 2rem;
            }
        }

        @media (max-width: 530px) {
            main {
                padding: 0px !important;
            }
        }

        @media (max-width: 850px) {
            .heading {
                margin: 0px;
            }
        }
    </style>
</head>

<body>
    <main class="p-0">
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo/teka.png') }}" alt="easyclass" />
                            <h4 style="color: #333;">Teka <span style="color: #c76805;">Time</span></h4>
                            <div class="subtitle">Presensi Digital Solution</div>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                        </div>

                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                            @endforeach
                        </div>
                        @endif

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4"
                                    class="input-field @error('id_user') is-invalid @enderror" name="id_user"
                                    value="{{ old('id_user') }}" autocomplete="off" placeholder="Username / Email"
                                    required />
                                {{-- @error('id_user')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror --}}
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" name="password"
                                    class="input-field @error('password') is-invalid @enderror" autocomplete="off"
                                    placeholder="Password" required />
                                {{-- @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror --}}
                            </div>

                            <input type="submit" value="Sign In" class="sign-btn" />

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>
                        </div>
                    </form>

                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="{{ asset('assets/img/image1.png') }}" class="image img-1 show" alt="" />
                        <img src="{{ asset('assets/img/image2.png') }}" class="image img-2" alt="" />
                        <img src="{{ asset('assets/img/image3.png') }}" class="image img-3" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Presensi Mudah, Kerja Lancar!</h2>
                                <h2>Absen Cepat, Produktivitas Meningkat!</h2>
                                <h2>Hadir Tanpa Ribet, Kinerja Lebih Hebat!</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Javascript file -->
    <script src="{{ asset('assets/login/script/app.js') }}"></script>
</body>

</html>