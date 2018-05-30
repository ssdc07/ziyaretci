# ziyaretci

Ziyaretci modülünü eklemek için öncelikle,

Portal klasörünün içerisindeki composer.json dosyasında gerekli yerlere şu satırları ekliyoruz;

-------------------------

"repositories": [ { .... { "type": "vcs", "url": "https://github.com/ssdc07/ziyaretci.git" } ],

"require": {

....   
"kouosl/ziyaretci": "dev-master"
},

-------------------------

Ekledikten sonra sanal makinaya bağlanarak şu komutları çalıştırıyoruz;

cd /var/www/portal

composer update

php yii migrate--migrationPath=@vendor/kouosl/ziyaretci/migrations

Böylelikle modülümüzü projeye dahil ediyoruz ve veritabanımızı oluşturup örnek bir kayıt ekliyoruz.

-------------------------

Son adım olarakda;

Portal dizinindeki "\frontend\config\main.php" dosyasına girerek şu satırları ekliyoruz;

'ziyaretci' => [ 'class' => 'kouosl\ziyaretci\Module'
],

-------------------------


Modül kurulumu tamamlanmıştır.

http://portal.kouosl/ziyaretci buradan modüle ulaşabilirsiniz.

Selin Cansel Türkmen - 151307037
