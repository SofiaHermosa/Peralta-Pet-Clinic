<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../../assets/css/custom.css">
	<title>Admin | Login</title>
</head>
<body>
	<div class="bg-gray-100 w-full h-screen">
		<img src="../../../assets/images/logo.png" class="w-28 fixed top-28 left-1/2 transform -translate-x-1/2" alt="">
		<div class="w-2/6 h-96 p-10 mt-20 fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
			<form action="/login/1" method="POST">
			<div class="grid grid-cols-1 gap-6">
				<div class="col-span-1">
					<label class="form_label">Email</label>
					<input type="text" name="email" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="uname">
				</div>

				<div class="col-span-1">
					<label class="form_label">Password</label>
					<input type="password" name="password" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="password">
				</div>

				<div class="col-span-1">
					<button type="submit" class="p-2 mt-4 mb-20 w-full bg-indigo-700 text-white font-bold rounded-md shadow-md hover:bg-indigo-500">Login</button>
                </div>

				<?php if(isset($_SESSION['error'])){ ?>
                <div class="col-span-1">
                    <div class="py-2 px-4 rounded shadow w-full bg-red-400 text-white">
                        <p><?php echo $_SESSION['error'] ?></p>
                    </div>
                </div>
                <?php } 
                unset($_SESSION['error']);
                ?>
			</div>
			</form>
		</div>
	</div>
</body>
</html>