1) php composer.phar install

2) curl -sS https://getcomposer.org/installer | php

3) create databse "randomizer", edit randomizer/protected/config/database.php (localhost as host and randomizer as DB by default)

4) php randomizer/protected/yiic migrate

5) cd randomizer/protected && php yiic.php sentence generate
