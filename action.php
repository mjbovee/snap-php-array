<?php
	echo "Hi " . htmlspecialchars($_POST['name']) . ". You are " . (int)$_POST['age'] . " years old.";