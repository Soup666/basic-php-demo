echo "============ Building docker =============="
docker build -t php-demo .
echo "============ Running docker ==============="
docker run -d -p 8080:80 php-demo
echo "============ Docker running! go to localhost:8080/main.php =========="
