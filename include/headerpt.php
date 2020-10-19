<?php
//cek session
if (!empty($_SESSION['admin'])) {
    $query = mysqli_query($config, "SELECT * FROM perusahaan");
    while ($data = mysqli_fetch_array($query)) {
        <?= '
                <div class="col s12" id="header-instansi">
                    <div class="card blue-grey white-text">
                        <div class="card-content">' ?>;
        if (!empty($data['logo'])) {
            <?= '<div class="circle left"><img class="logo" src="./upload/' . $data['logo'] . '"/></div>' ?>;
        } else {
            <?= '<div class="circle left"><img class="logo" src="./asset/img/logo.png"/></div>' ?>;
        }

        if (!empty($data['nama'])) {
            <?= '<h5 class="ins">' . $data['nama'] . '</h5>' ?>;
        } else {
            <?= '<h5 class="ins"></h5>' ?>;
        }

        if (!empty($data['alamat'])) {
            <?= '<p class="almt">' . $data['alamat'] . '</p>' ?>;
        } else {
            <?= '<p class="almt"></p>' ?>;
        }
        <?= '
                        </div>
                    </div>
                </div>' ?>;
    }
} else {
    header("Location: ../");
    die();
}
