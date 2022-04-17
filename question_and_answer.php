<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/slick.css" />
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/sub.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/common.js"></script>
	<link rel="stylesheet" href="css/qa.css">
	<link rel="icon" href="img/logo.ico" type="image/gif">

	<style>
		.visual-title {
			padding-left: 0px;
			font-weight: 600;
			padding-top: 190px;
		}
	</style>
</head>

<body>

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<?php
	$link_switch = 'vi/qna.php';
	include_once('menumobile.php');
	?>
	<div id="wrap">
		<div id="header">
			<div class="inner">
				<h1 class="header-logo"><a href="index.php"><img src="img/main/header_logo.png" alt=""></a></h1>
				<?php
				include_once('menu.php');
				?>
				<div class="header-user">
					<a href="https://my.kj-glovicevc.com/login" target="_blank">Login</a>
					<a href="https://my.kj-glovicevc.com/register" target="_blank">Open Live Account</a>
				</div><!-- // header-user -->
				<div class="header-demo"><a href="https://my.kj-glovicevc.com/demo-register" target="_blank">Demo</a></div><!-- // header-demo -->
				<div class="header-lang">
					<button type="button">ENGLISH</button>
					<ul class="list">
						<li><a href="#"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>
						<li><a href="vi/qna.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
					</ul>
				</div>

			</div>
		</div><!-- // header -->

		<!-- Phan content -->
		<div class="container platforms">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10 neonText">QUESTION<br>& ANSWER</div>
					<div class="visual-platforms-i1 ani-top delay2"><img src="img/platforms/platform-img/platforms_visual-i1.png"></div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<h2> INSERT SUITABLE QUESTIONS
					</h2>
				</div>
			</div><!-- // content -->

			<div class="content content-02">
				<div class="inner">
					<div class="content-color-text">Question And Answer OKE LA</div>
					<div class="box-question">
						<ul>
							<li>
								<div class="box-answer">
									<button onclick="showOrHidden('showAnswer1')">1. Questions about Registration, Glovice VC account <img src="img/muitenxuong.png" alt=""></button>
									<div id="showAnswer1" style="display: none;">
										<ul>
											<li>
												<button onclick="showOrHidden('answer11')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer11" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer12')"> 1.2. What should I do after registration?</button>
												<p id="answer12" style="display: none;">You have just completed your registration with Glovice VC; What should you do next? Don't worry, we've put together a simple guide for you.
													Steps to follow these steps after registration: <br>
													&nbsp; 1. Create a demo/live account <br>
													&nbsp; 2. Download the trading platform <br>
													&nbsp; 3. Complete information verification*(If you skip the verification steps during registration) <br>
													<b>Create a demo/live account </b> <br>
													&nbsp;- You can create a live or demo trading account when registering a Glovice VC account by default.
													We recommend that you familiarize yourself with the process of creating a new trading account. <br>
													&nbsp;- In the “My Account” section there are tabs called “Live Accounts” and “Demo Accounts.”
													You can see a button called “Create Live Account” on the right when clicking the
													“Live Account tab” and vice
													versa for “Demo Account.” when clicking on this icon, the system will display all types of trading
													accounts that you can create (on MT4, Micro or Standard accounts, etc.) <br>
													&nbsp;- You can open the account by fulfilling all the necessary information and following the steps. <br>
													<b>Download the trading platform </b> <br>
													&nbsp; To trade with your created trading account, you will have to use a trading terminal on your chosen platform.
													Here is a list of all available terminals and platforms: <br>

													<!-- &nbsp; Computer <br>
																&nbsp; MetaTrader 4 for Windows <br>
																&nbsp; Mobile device <br>
																&nbsp; MetaTrader 4 for iOS <br>
																&nbsp; MetaTrader 4 for Android <br> -->
													<b>Complete information verification</b> <br>
													We attach great importance to fully verifying your Glovice VC account, as limits are placed on accounts that are not fully verified. <br>
													To verify, you need to submit verification of identity (POI), verification of address (POA), and complete a Financial Profile,
													a short survey about your trading experience.
													We have 24/5 support staff to verify your documents within 24 hours. <br>
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer13')">1.3. What should I do if my verification documents are not in my name?</button>
												<p id="answer13" style="display: none;"> If you are the account holder, your verification must be in your own legal name
													and not in anyone else's name. If the documents are found to be incorrect, the account may be locked so it is important
													that you correct them as soon as possible. <br>
													Please contact our Support Team via ChatBot (bottom right of your screen) or email or other channels as soon as possible with your account
													verification information. <br>

												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer14')">1.4. How do I check if my account is ready to deposit and trade?</button>
												<p id="answer14" style="display: none;"> When you sign up for a Glovice VC account with Glovice VC, you can choose
													to create a demo account or a live account during registration. <br>
													If you want to fund your Live account and start trading, you need to complete the following steps: <br>
													1. Email verification <br>
													2. Fill in your personal information <br>
													3. Upload KYC documents including Identity Verification documents and Address Verification documents <br>


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer15')">1.5. How do I verify my account if I open an account overseas?</button>
												<p id="answer15" style="display: none;"> Before going into detail on how to handle this situation, we recommend that you always open an account in your country of permanent residence. If you are on vacation or traveling abroad, please wait until you return home before opening an account. <br>
													To facilitate the account verification process, you will need to verify your phone number and address, both of which must match the country you are registered in. <br>
													As a result, if you open an account in a country where you are only temporary, you may face difficulties later (when you have to complete the account verification process). <br>
													Now let's learn about how to verify your account if you are registered abroad: <br>
													<b>POI (Document of Identity Verification)</b>
													To complete the POI verification process, you should always provide identification issued in your country. This step does not consider the country you have registered your account with and where you are currently residing. <br>
													Let's look at a few examples of this: <br>
													• If you are a Malaysian citizen living in India and have opened an account there, you will need to provide identification issued by the Malaysian government to verify the POI. <br>
													• If you are an Indian citizen registered for a Glovice VC account in Pakistan and currently undergoing the verification process in South Africa, you will still need to provide an ID issued by the Indian government. <br>
													<b>POA (Document of Verification of Address) </b>
													To complete the POA verification process, you will need to provide an address verification document issued in the country where you have registered your account. <br>
													Let's take a look at some examples below: <br>
													• If you are an Indian citizen registered for an account in South Africa, you must provide proof of address issued in South Africa. <br>
													• If you are an Indian citizen who has registered a Glovice VC account in India and is currently undergoing the verification process in South Africa, you will still need to provide an address verification document issued in India. The reason is that you have selected India as your country of residence during the account opening process. If you have moved to live permanently in South Africa, open a new account in South Africa. <br>
													If you move to another country after verification, contact our Support Team to change the address on your account. Always keep your account up to date with the most accurate information. <br>

												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer16')">1.6. How do I change the name used when registering?</button>
												<p id="answer16" style="display: none;"> When you sign up for an account with Glovice VC, you will need to enter some personal details such as your name and date of birth. You may have accidentally entered a nickname or worse, made a typo. <br>
													In this article, we'll show you what to do when you want: <br>
													• Fixed typo when registering <br>
													• Change the name used when registering <br>
													<b> Fixed typo when registering </b>
													Our experts always name the account the same as it appears on the documents uploaded during the registration process. If you mistyped your name, you should do the following: <br>
													1. Submit identification with your exact name. <br>
													2. Make sure the documents meet our requirements. <br>
													3. Once approved, your account name will be edited to match the document. <br>
													4. If you wish, you can also email us to notify us of the necessary changes. <br>
													Change the name used when registering <br>
													• Registered under someone else's name - We always ask you to provide correct information when registering an account. If you have registered with an incorrect name or someone else's name, this name will not be accepted. During the verification process, your documents will be rejected due to name mismatch. <br>
													Solution: Sign up again with the correct credentials and with a different email address. <br>
													• Valid name change - If you've changed your valid name, we can help you properly rename your account. <br>
													Solution: Send an email to the support team with proof of name change and new ID. Accordingly, you will also need to upload identity verification documents to your Glovice VC account again. Once approved, your account registration name will be revised. <br>

												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer17')">1.7. How can I change and update my personal information and address? </button>
												<p id="answer17" style="display: none;"> When you sign up for a Glovice VC account with Glovice VC, you can choose
													to create a demo account or a live account during registration. <br>
													If you want to fund your Live account and start trading, you need to complete the following steps: <br>
													1. Email verification <br>
													2. Fill in your personal information <br>
													3. Upload KYC documents including Identity Verification documents and Address Verification documents <br>


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer18')">1.8. How to check the reason why my document was rejected?</button>
												<p id="answer18" style="display: none;">There are so many reasons that your KYC documents will be rejected. As our process, when rejecting a document, our staff will attach a reason or request to guide you to upload a new document. For more detailed information, please refer to the instructions below.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer19')">1.9. What information is required to create an account?</button>
												<p id="answer19" style="display: none;"> First, you need an active email address. <br>
													You need to take a few steps to complete the profile during verification process. Verification steps include: <br>
													• Complete the Address Information <br>
													• Complete the Financial Information <br>
													• Create a live/demo MT4 account <br>
													• Upload KYC Document including Identity Verification documents and Address Verification documents<br>
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer110')">1.10. How many passwords do I have for one Glovice VC account?</button>
												<p id="answer110" style="display: none;">Only one password
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer111')">1.11. How to recover any of your Glovice VC passwords in a few easy steps?</button>
												<p id="answer111" style="display: none;"> Step 1: Visit kj-glovicevc.com and click Log In <br>
													Step 2: Select Forgot password <br>
													Step 3: Enter the email address used to register with Glovice VC <br>
													Step 4: Click Reset password and go to the check email <br>
													Step 5: Click Reset password in the email you received <br>
													Step 6: In the Confirm password box, enter the new password you want to change and press Reset password <br>
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer112')">1.12. Can I change my email address once I have registered?</button>
												<p id="answer112" style="display: none;"> No, unfortunately, you cannot change the email address you used to register
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer113')">1.13. Can I open several Glovice VC accounts with a single email address?</button>
												<p id="answer113" style="display: none;">No, we do not offer more than one Glovice VC account per email address. You are able to create a new Glovice VC account with a new email address, however, both will remain separate, with their own Glovice VC account and password.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer114')">1.14. What is the accepted size of the verification documents?</button>
												<p id="answer114" style="display: none;"> <b>5000 KB per document uploaded</b> <br>
													The size limit is per document uploaded, you may upload more than one document if you wish. <br>
													The accepted file types are JPEG, PNG, GIF, BMP and PDF.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer115')">1.15. How can I check the status of my uploaded verification documents?</button>
												<p id="answer115" style="display: none;"> The top corner of the screen shows "Document Verified". You have successfully applied for KYC document upload.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer116')">1.16. How long does it take to verify an account?</button>
												<p id="answer116" style="display: none;"> You should receive a response on the identity verification or address verification within 1 working day for each submission.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer117')">1.17. Do Client Agreement/AML Policy/Privacy Statement need to be signed?</button>
												<p id="answer117" style="display: none;"> You do not need to sign the Client Agreement. However, you need to accept it by clicking “Agreement to Client Agreement/AML Policy/Privacy Statement”during the registration process.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer118')">1.18. If not verified, how will the account be restricted?</button>
												<p id="answer118" style="display: none;"> You can only trade and withdraw your money when you have completed all the verification steps.
												</p>
											</li>
										</ul>
									</div>
								</div>

							</li>
							<li>
								<div class="box-answer">
									<button onclick="showOrHidden('showAnswer2')">2. Funding questions, Deposit and Withdraw<img src="img/muitenxuong.png" alt=""> </button>
									<div id="showAnswer2" style="display: none;">
										<ul>
											<li>
												<button onclick="showOrHidden('answer21')">2.1. How can I deposit/withdraw to/from my trading account via 5pay?</button>
												<p id="answer21" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer22')">2.2. How can I deposit/withdraw to/from my trading account via Perfect Money?</button>
												<p id="answer22" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer23')">2.3. How do I make withdrawals if I deposit funds with multiple payment methods?</button>
												<p id="answer23" style="display: none;">Currently, Glovice VC allows all clients to withdraw funds using multiple payment methods. <br>
													However, you could only use the same payment method with deposit for the first time according to our AML policy. <br>
													For instance, if you choose 5Pay to deposit for the first time, you also need to choose 5Pay when you withdraw. <br>
													After the first deposit and withdrawal, you will be able to choose whichever payment method to use. <br>
													For the details of withdrawing, please check the withdrawal manual attached below: <br>
													Link of Withdrawal Manual:

												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer24')">2.4. Why is there an " Amount can not be greater than current balance." warning when I withdraw?</button>
												<p id="answer24" style="display: none;">The trading account may not have enough funds to complete the withdrawal request. Please confirm the following: <br>
													- The trading account selected for withdrawal is the correct one. <br>
													- There are enough funds in the selected trading account for withdrawal. <br>
													- The conversion rate of the selected currency makes the withdrawal amount insufficient. <br>
													<b>For further assistance:</b> <br>
													If you have confirmed the above and are still getting the "not enough funds" error, please contact Glovice VC Support and provide the following details for assistance <br>
													- Trading account number. <br>
													- The name of the payment method you are using. <br>
													- Screenshot or image of the error message you're getting (if applicable). <br>

												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer25')">2.5. What should I do if I enter the wrong account number when withdrawing money?</button>
												<p id="answer25" style="display: none;">If this issue occurs, it is best to contact our Support Team for assistance.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer26')">2.6. How long does it take to process a deposit or withdrawal?</button>
												<p id="answer26" style="display: none;">Glovice VC offers many and varied payment methods. As a result, deposit and withdrawal processing times may vary depending on the chosen transaction method. Usually, it takes 1 working day for a withdrawal request and a few minutes to 1 working day for a deposit request.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer27')">2.7. Can I make deposits and withdrawals on weekends and public holidays?</button>
												<p id="answer27" style="display: none;">Yes, you can make deposits, withdrawals, and transfers on weekends and public holidays. However, as weekends and public holidays are not "business days", delays may occur as every transaction may be subject to verification.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer28')">2.8. Where can I check the conversion rate?</button>
												<p id="answer28" style="display: none;">1. You proceed to login according to the following link: https://my.kj-glovicevc.com/ttr <br>
													2. Click Deposit and fill in the required information to deposit. Example: Minimum deposit is $10. <br>
													3. After filling in the necessary information: Click Deposit now -> Ok. You will immediately be redirected to our withdrawal provider's deposit page. <br>
													4. Here you will see the exchange rate converted from the amount you want to deposit (In this case it is $10) to the amount to be deposited in your national currency. <br>

												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer29')">2.9. How can I find available payment methods?</button>
												<p id="answer29" style="display: none;">1. You proceed to login according to the following link: https://my.kj-glovicevc.com/login <br>
													2. Click Deposit/Withdraw in the menu section. <br>
													3. You will find all available payment methods suitable here. <br>

												</p>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="box-answer">
									<button onclick="showOrHidden('showAnswer3')">3. Trading questions, demo/trading account4 <img src="img/muitenxuong.png" alt=""></button>
									<div id="showAnswer3" style="display: none;">
										<ul>
											<li>
												<button onclick="showOrHidden('answer31')">3.1. Which account type should I choose?</button>
												<p id="answer31" style="display: none;"> Glovice VC offers a variety of account types designed to facilitate a variety of trading styles. It is not possible to recommend a specific account type without knowing one's personal preferences or trading style, but we can explain the features each account type can assist and encourage. You should learn more to find the ideal account type for you. <br>
													<b>Standard Account Types</b> <br>
													• Standard <br>
													• Micro <br>
													The Micro account types are designed with all traders in mind, as the terms tend to be typical and widely applicable. The main feature of these accounts is the low minimum deposit depending on the payment method used (as low as 100 USD), a feature that makes these accounts accessible to newbies begin.
													For the Standard Account, we provide the spread from 1. Furthermore, both Standard and Micro account offers 0.01 lots allowing for much smaller trading volumes which means less risk exposure; in other words, you will have more chances of "correction". <br>
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer32')">3.2. How to create a demo account?</button>
												<p id="answer32" style="display: none;">
													The demo account is great for you to practice and get familiar with before getting into real trading.
													When you sign up for a Glovice VC account, you can choose to create a live or demo account.
													After the registration, you can create more demo accounts in an extremely simple way. <br>
													<b>Follow these steps to create a new test account in your Glovice VC account:</b> <br>
													&nbsp; 1. Select “My Account” to create in the left menu bar <br>
													&nbsp; 2. Switch to “Demo account” tab <br>
													&nbsp; 3. Click “Create Demo Account” button on the right <br>
													&nbsp; 4. Fill in the required information and choose "Demo Account" for account type <br>
													&nbsp; 5. Click the “Create Account” button <br>
													<b> <i> Congratulations </i> </b>! You have added a new test account to the test section in the My Account section.
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer33')">3.3. Can I change my account currency? </button>
												<p id="answer33" style="display: none;">
													No. We recently only provide USD as our currency.

												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer34')">3.4. How can I find my trading account number?</button>
												<p id="answer34" style="display: none;">
													To find your trading account number in your Glovice VC account: <br>
													Log in and go to the My Accounts tab. <br>
													This is the page for all your trading accounts. You will see your trading account numbers here as well. <br>


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer35')">3.5. What to do if my trading account is missing?</button>
												<p id="answer35" style="display: none;">
													In this case, you can contact support for assistance.

												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer36')">3.6. What is the difference between a Live and Demo account?</button>
												<p id="answer36" style="display: none;">
													The major difference is that with Live accounts you will trade with real funds, while Demo accounts use virtual money with no real value to trade. <br>
													Other than that, the market conditions for Demo accounts are exactly the same as they are for live accounts, making them ideal for practicing your strategies. <br>
													If you would like to try a Demo account for yourself, sign up and choose the amount of virtual money to practice with. <br>


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer37')">3.7. Where do I check my trading account’s type?</button>
												<p id="answer37" style="display: none;">
													&nbsp; 1. Login to Dashboard <br>
													&nbsp; 2.The left side shows the menu bar <br>
													&nbsp; 3. You click on My Account. This is the page where all your trading account information is displayed. <br>
													The account type is also shown when choosing to <b>Create an account</b>


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer38')">3.1. Which account type should I choose?</button>
												<p id="answer38" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer39')">3.1. Which account type should I choose?</button>
												<p id="answer39" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer310')">3.1. Which account type should I choose?</button>
												<p id="answer310" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer311')">3.1. Which account type should I choose?</button>
												<p id="answer311" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer312')">3.1. Which account type should I choose?</button>
												<p id="answer312" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer313')">3.1. Which account type should I choose?</button>
												<p id="answer313" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer314')">3.1. Which account type should I choose?</button>
												<p id="answer314" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer315')">3.1. Which account type should I choose?</button>
												<p id="answer315" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer316')">3.1. Which account type should I choose?</button>
												<p id="answer316" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer317')">3.1. Which account type should I choose?</button>
												<p id="answer317" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer318')">3.1. Which account type should I choose?</button>
												<p id="answer318" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer319')">3.1. Which account type should I choose?</button>
												<p id="answer319" style="display: none;">


												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer320')">3.1. Which account type should I choose?</button>
												<p id="answer320" style="display: none;">


												</p>
											</li>
											<!-- Dự bị thêm 1 câu nữa -->
											<!-- <li>
													<button	onclick="showOrHidden('answer321')">3.1.	Which account type should I choose?</button>
													<p id="answer321" style="display: none;" >	
														
														
													</p>
												  </li> -->
										</ul>
									</div>
								</div>

							</li>
							<li>
								<div class="box-answer">
									<button onclick="showOrHidden('showAnswer4')"> 4. Trading platform (MT4) questions, errors <img src="img/muitenxuong.png" alt=""></button>
									<div id="showAnswer4" style="display: none;">
										<ul>
											<li>
												<button onclick="showOrHidden('answer41')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer41" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer42')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer42" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer43')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer43" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer44')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer44" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer45')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer45" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer46')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer46" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer47')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer47" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer48')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer48" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer49')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer49" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>

										</ul>
									</div>
								</div>

							</li>
							<li>
								<div class="box-answer">
									<button onclick="showOrHidden('showAnswer5')">5. KJ Glovice VC company ‘s questions<img src="img/muitenxuong.png" alt=""></button>
									<div id="showAnswer5" style="display: none;">
										<ul>
											<li>
												<button onclick="showOrHidden('answer51')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer51" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer52')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer52" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
										</ul>
									</div>
								</div>

							</li>
							<li>
								<div class="box-answer">
									<button onclick="showOrHidden('showAnswer6')"> 6. Forex ‘s genenal Questions<img src="img/muitenxuong.png" alt=""></button>
									<div id="showAnswer6" style="display: none;">
										<ul>
											<li>
												<button onclick="showOrHidden('answer61')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer61" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
											<li>
												<button onclick="showOrHidden('answer62')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer62" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
										</ul>
									</div>
								</div>

							</li>
							<li>
								<div class="box-answer">
									<button onclick="showOrHidden('showAnswer7')"> 7. IB questionsc<img src="img/muitenxuong.png" alt=""></button>
									<div id="showAnswer7" style="display: none;">
										<ul>
											<li>
												<button onclick="showOrHidden('answer71')">1.1. How do I create/register a Glovice VC account?</button>
												<p id="answer71" style="display: none;">Go to this link and register as the detailed manual below.
													(attach pdf manual file)
												</p>
											</li>
										</ul>
									</div>
								</div>

							</li>
							<!-- khi nào có cauah ỏi mới thì thêm vô -->
							<!-- <li>  
                                <div class="box-answer" s>
                                    <button onclick="">7. Nạp tiền chơi Forex có phải là vi phạm pháp luật việt nam <img src="img/muitenxuong.png" alt=""></button>
									<div id="showAnswer7" style="display: none;">
										<ul>
											<li>Câu hỏi số 2</li>
										</ul>
									  </div>
                                </div>
                             
                            </li> -->
							<script>
								function showOrHidden(idShow) {
									var x = document.getElementById(idShow);
									if (x.style.display === "none") {
										x.style.display = "block";
									} else {
										x.style.display = "none";
									}
								}
							</script>
						</ul>
					</div>
				</div>
			</div><!-- // content -->

			<div class="content content-store">
				<div class="inner">
					<div class="inner-left">
						<div class="inner-box">
							<div class="inner-title">Glovice VC MT4</div>
							<div class="inner-text">
								World most popular trading tool for trading CFDs. Try and make <br>
								your own automated Trading bot!
							</div>
							<div class="download-btn-main">
								<div><a href="https://download.mql5.com/cdn/web/16391/mt4/kjglovice4setup.exe">Download MT4 for Windows</a></div>
								<!--<div><a href="#">Download MT4 App Mac</a></div>-->
							</div>
						</div>
						<div class="inner-box">
							<div class="inner-title">Available on Mobile</div>
							<div class="inner-text">
								Monitor the markets on the go with our mobile application and <br>
								benefit from ultra-low latency trading infrastructure, award- <br>
								winning order execution and deep liquidity. Available for iOS and <br>
								Android devices.
							</div>

							<div class="store-btn">
								<a href="https://download.mql5.com/cdn/mobile/mt4/android?server=KJGlovice-Demo,KJGlovice-Live" class="google"><span>Download on the</span><em>Google Play</em></a>
								<a href="https://download.mql5.com/cdn/mobile/mt4/ios?server=KJGlovice-Demo,KJGlovice-Live" class="apple"><span>Download on the</span><em>App Store</em></a>
							</div>
						</div>
					</div><!-- // inner-left -->
					<div class="inner-right motion animate">
						<img class="ani-left delay1" src="img/main/mt4_pc_mobile.gif" alt="">
					</div><!-- // inner-right -->
				</div>
			</div>
		</div>
		<!-- ket thuc phan content -->
		<div id="footer">
			<div class="inner">
				<?php
				include_once('menufooter.php');
				?>
			</div>

			<div class="footer-bottom">
				<div class="inner">
					<ul class="footer_sns">
						<li class="item-01"><a href="#"><img src="img/main/footer_bottom_item_01.png" alt=""></a></li>
						<li class="item-02"><a href="#"><img src="img/main/footer_bottom_item_02.png" alt=""></a></li>
						<li class="item-03"><a href="#"><img src="img/main/footer_bottom_item_03.png" alt=""></a></li>
						<li class="item-04"><a href="#"><img src="img/main/footer_bottom_item_04.png" alt=""></a></li>
					</ul>

				</div>
			</div><!-- // footer-bottom -->
			<div class="dim"></div>
			<script type="text/javascript">
				var $zoho = $zoho || {};
				$zoho.salesiq = $zoho.salesiq || {
					widgetcode: "b7a46b3af646b4df11935b71b2b89f7e30f497d5f73387e6e6122c8faf48121e",
					values: {},
					ready: function() {}
				};
				var d = document;
				s = d.createElement("script");
				s.type = "text/javascript";
				s.id = "zsiqscript";
				s.defer = true;
				s.src = "https://salesiq.zoho.com/widget";
				t = d.getElementsByTagName("script")[0];
				t.parentNode.insertBefore(s, t);
				d.write("<div id='zsiqwidget'></div>");
			</script>
		</div><!-- // footer -->
</body>

</html>