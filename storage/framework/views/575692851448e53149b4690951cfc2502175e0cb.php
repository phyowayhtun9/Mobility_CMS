<html>
<head>
    <style>
        p {
            font-size: 16px;
            color: #000;
        }
    </style>
</head>
<body>
<p>
    Click here to reset your password: <?php echo e(url('admin/password/reset/'.$token)); ?>

</p>
</body>
</html>