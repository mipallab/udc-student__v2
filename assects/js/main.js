
		//photo upload
			jQuery('.fileimg').change(function(e){
				let url = URL.createObjectURL(e.target.files[0]);
				jQuery(".livephoto").attr('src',url);
			});

		//age cal
			function ageCalculator() {  
			    let userinput = document.getElementById("dofdate").value;  			// get user date of birth
			    let dob = new Date(userinput);  									// convet a date
			    let currentDate = new Date().getFullYear();							// 
			    let userinputyear = dob.getFullYear();
			    if(currentDate < userinputyear) {  
			         document.getElementById("old").value = -1;   
			      return false;   
			    } else {  
			      
			    //calculate month difference from current date in time  
			    let month_diff = Date.now() - dob.getTime();  
			      
			    //convert the calculated difference in date format  
			    let age_dt = new Date(month_diff);   
			      
			    //extract year from date      
			    let year = age_dt.getUTCFullYear();  
			      
			    //now calculate the age of the user  
			    let age = Math.abs(year - 1970);  
			      
			    //display the calculated age  
			    return document.getElementById("old").value = age;   
			       
			    }  
			}

		// hide show pass
			function passHideShow() {
			  var x = document.getElementById("pass");
			  if (x.type === "password") {
			    x.type = "text";
			    document.getElementById("btn").innerHTML="hide";
			  } else {
			    x.type = "password";
			    document.getElementById("btn").innerHTML="show";
			  }
			}

		/*====================
			 model box 
		=====================*/

		function showConfirm(message, callback) {
			let confirmBox = document.createElement('div');
			confirmBox.classList.add('confirm-box');

			let messageBox = document.createElement('div');
			messageBox.classList.add('message-box');
			messageBox.textContent = message;
			confirmBox.appendChild(messageBox);


			let buttonBox = document.createElement('div');
			buttonBox.classList.add('button-box');
			messageBox.appendChild(buttonBox);

			let yesBox = document.createElement('button');
			yesBox.classList.add('yes-box');
			buttonBox.appendChild(yesBox);
			yesBox.textContent = "Yes";
			yesBox.addEventListener('click', yesButtonClick);


			let noBox = document.createElement('button');
			noBox.classList.add('no-box');
			buttonBox.appendChild(noBox);
			noBox.textContent = "No";
			noBox.addEventListener('click', noButtonClick);

			function removeConfirmBox(){
				document.body.removeChild(confirmBox);
			}

			function yesButtonClick() {
				callback(true);
				removeConfirmBox()
			}

			function noButtonClick() {
				callback(false);
				removeConfirmBox()
			}

			document.body.appendChild(confirmBox);
		}
		document.querySelector("#delete-btn").addEventListener('click',()=> {
			showConfirm('Are you Sure? Data will delete.', function(result){
				if(result) {
					console.log('yes');
				}else {
					console.log('no');
				}
			});
		});
		
	
