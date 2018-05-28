# ziyaretci

Ziyaretci modülünü eklemek için öncelikle,

Komut satırında modülümüzü ekleyeceğimiz yere (@vendor/kouosl/) altına geliyoruz. Ardından "https://github.com/ssdc07/ziyaretci.git" komutunu çalıştırarak modülümüzü projemize indiriyoruz.

Portal dizinindeki "\frontend\config\main.php" dosyasına girerek şu satırları ekliyoruz;

'ziyaretci' => [ 'class' => 'kouosl\ziyaretci\Module'
],

Portal klasörünün içerisindeki composer.json dosyasında gerekli yerlere şu satırları ekliyoruz;

############################

"repositories": [ { .... { "type": "vcs", "url": "https://github.com/ssdc07/ziyaretci.git" } ],

"require": {

....   
"kouosl/ziyaretci": "dev-master"
},

############################

Ekledikten sonra sanal makinaya bağlanarak şu komutları çalıştırıyoruz;

cd /var/www/portal sudo chmod -R 777 vendor/kouosl/ziyaretci composer update

Son adım olarakda modülümüzde "migrations" klasöründeki .php uzantılı dosyayı kopyalayıyoruz ve portal dizininde "console/migrations/" altına yapıştırıyoruz(klasör yok ise kendimiz oluşturuyoruz). Ardından sanal makinamızda,

php yii migrate

Komutunu çalıştırıyoruz böylelikle veritabanımızı oluşturup örnek bir kayıt ekliyoruz.

Modül kurulumu tamamlanmıştır.

http://portal.kouosl/ziyaretci buradan modüle ulaşabilirsiniz.

Selin Cansel Türkmen - 151307037
