<!DOCTYPE html>
<html>
<head lang="cs">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vyrážíme na cestu</title>
    <link rel="stylesheet" href="gallery.css?3">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script  type="text/javascript" src="gallery.js" defer></script>
</head>
<body>

<?php
    $photos = [
       "02235d58-ade0-4739-90ee-ad7184f8cbbf.JPG", "0287880c-da3b-4c43-8632-deeed94e5c59.JPG", "034a57f3-49f3-4ff8-ad07-d55f358ed8e3.JPG", "163ddfe6-482b-4336-b4d2-73ddf06e1bde.JPG", "193454476_828041364775448_4257920351682004303_n.jpg", "1940aaa7-0267-4b17-811b-f57ec1c9e438.JPG", "1ddc916e-a75f-4a95-a603-1d79227e0d7f.JPG", "2020-10-10-Peta-Luba-FOTOKOUTEK-0160-scaled.jpg", "2020-10-10-Peta-Luba-FOTOKOUTEK-0166-scaled.jpg", "20200125_153524.jpg", "20200201_103555.jpg", "20200201_134723.jpg", "20200416_185052.jpg", "20200502_132305.jpg", "20200929_142023.jpg", "20200930_180901.jpg", "20200930_181608.jpg", "20200930_181721.jpg", "20201001_151241.jpg", "20201002_171959.jpg", "25B62E07-9471-446C-B3D5-B2B1EDA05038.jpeg", "32146dc2-2b88-40ea-bd2a-d1c57901f22f.JPG", "32D7AA80-8FD8-4771-B4AF-24EF48C20C31.jpeg", "4569c064-6627-4ca7-aacc-8eda5072d02f.JPG", "4d2996dc-3678-444d-be85-b73d4a44ddcb.JPG", "56371340-df4a-447a-99ba-fdb4f6b6c174.JPG", "6a779a63-f102-461f-949d-4fc4d9013a83.JPG", "70f86d48-0dc1-4f14-aa34-b2a52bc40bc6.JPG", "7fe09af1-5e4a-4cfc-b460-8b895a4246bb.JPG", "94b55b23-d02f-4260-8b50-bf38fd0c4082.JPG", "991bf77a-9ab4-4000-aab2-22afb71eea49.JPG", "A8796260-B454-4F7B-B20E-1C929EE2575F.jpeg", "DSCF4131-01.jpeg", "DSCF4167-01.jpeg", "DSCN1364.JPG", "DSCN1413.JPG", "DSCN1429.JPG", "DSCN1436.JPG", "DSCN1450.JPG", "DSCN1490.JPG", "DSCN1573.JPG", "DSCN1619.JPG", "DSCN1701.JPG", "DSCN1721.JPG", "DSCN1743.JPG", "DSCN1777.JPG", "DSCN1889.JPG", "DSCN1975.JPG", "DSCN2020.JPG", "DSCN2184.JPG", "DSCN2206.JPG", "DSCN2276.JPG", "DSCN2438.JPG", "DSCN2851.JPG", "DSCN2889.JPG", "DSCN2894.JPG", "DSCN2936.JPG", "DSCN2962.JPG", "DSCN2964.JPG", "DSCN2972.JPG", "DSCN2988.JPG", "DSC_0008.JPG", "DSC_0159.JPG", "DSC_0162.JPG", "DSC_0163.JPG", "DSC_0167.JPG", "DSC_0175.JPG", "DSC_0176.JPG", "DSC_0205.JPG", "DSC_0239.JPG", "DSC_0240.JPG", "DSC_0254.JPG", "DSC_0260.JPG", "DSC_0273.JPG", "DSC_0283.jpg", "DSC_0286 (2).JPG", "DSC_0311.JPG", "DSC_0315.JPG", "DSC_0323.jpg", "DSC_0374.JPG", "DSC_0535.jpg", "DSC_0575.JPG", "DSC_0582.jpg", "DSC_0713.JPG", "DSC_0777.JPG", "DSC_0990.JPG", "DSC_1033.JPG", "GOPR1841_1595941261200.jpg", "HANA9187.JPG", "HANA9197.JPG", "HANA9313.JPG", "HANA9387.JPG", "HANA9486.JPG", "HANA9493.JPG", "HANA9499.JPG", "HANA9527.JPG", "HANA9531.JPG", "HANA9623.JPG", "HANA9632.JPG", "HANA9656.JPG", "HANA9660.JPG", "IMG_0337.jpg", "IMG_0727.JPG", "IMG_0782.JPG", "IMG_0970.JPG", "IMG_1268.JPG", "IMG_1573.JPG", "IMG_1974.jpg", "IMG_1981.jpg", "IMG_1982.jpg", "IMG_20200704_103615.jpg", "IMG_20200704_171947.jpg", "IMG_20200705_191845.jpg", "IMG_20210213_184447.jpg", "IMG_20210213_201338.jpg", "IMG_20210214_101508.jpg", "IMG_20210430_210500.jpg", "IMG_20210501_122807.jpg", "IMG_20210530_120830.jpg", "IMG_20210620_103220.jpg", "IMG_20210717_103437_6.jpg", "IMG_20210727_161813_3.jpg", "IMG_20210904_181327_3.jpg", "IMG_20210911_172108_8.jpg", "IMG_2092.JPG", "IMG_3067.JPG", "IMG_4064.jpg", "IMG_4441.jpg", "IMG_5473.JPG", "IMG_5538.JPG", "IMG_5608.JPG", "IMG_7330.jpg", "IMG_7332.jpg", "Soubor_001 (1).jpeg", "Soubor_001.jpeg", "Soubor_002 (1).jpeg", "Soubor_002 (3).jpeg", "Soubor_003.jpeg", "Soubor_005 (1).jpeg", "Soubor_005 (3).jpeg", "Soubor_005.jpeg", "Soubor_008.jpeg", "Soubor_011 (1).jpeg", "Soubor_012 (1).jpeg", "Soubor_019 (1).jpeg", "Soubor_019.jpeg", "WhatsApp Image 2020-11-11 at 22.58.29.jpeg", "ba526f7c-74ed-4497-ae45-1c8c4c24dce3.JPG", "c0a9bf95-2f90-485e-a236-b4c111589ec0.JPG", "c375f03b-f536-47bc-b87c-193a6c36bcc2.JPG", "c5874caf-a14d-4df0-af3b-6043d98dc459.JPG", "d0823929-b0c7-4e94-bab7-3e967149ce47.JPG", "d40ba4b0-aa9f-4a24-8e02-1c61a2a6a398.JPG", "d9e63d4f-30de-46c5-a121-e0e6bf6c9c8b.JPG", "e8779c57-5d61-43b9-8363-161d2703757e.JPG", "f1ff49d6-e9b0-4668-83f1-d4a8256bf46a.JPG", "f316c39a-443e-4792-96cc-c740c75aa0fd.JPG", "f8d22f7a-013c-47c4-9227-3825b61632d7.JPG", "fae3d4a2-dc62-46d7-9708-ea9c92926cd9.JPG"
    ];
?>

<div class="slider">
  <a class="arrowL">&lt;</a>
  <div id="slideshow">
    <div><img src="photos/<?php echo $photos[0]; ?>"/></div>

    <?php for ($i = 1; $i < count($photos); $i++) { ?>
        <div class="hidden"><img src="photos/<?php echo $photos[$i]; ?>" loading="lazy"/></div>
    <?php } ?>
  </div>
  <a class="arrowR">&gt;</a>
</div>

  
</body>
</html>
