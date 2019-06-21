#!/bin/bash
# get all filename in specified path
#my_array=(A B "C" D)
#
#echo "第一个元素为: ${my_array[0]}"
#echo "第二个元素为: ${my_array[1]}"
#echo "第三个元素为: ${my_array[2]}"
#echo "第四个元素为: ${my_array[3]}"
#
#for str in 'This is a string'
#do
#echo $str
#done


echo "shell定义字典"
#必须先声明
declare -A dic
#path=$(pwd)/绯梦之都
path=$(pwd)/小说
echo $path
cd  $path
getFilename(){
local filepath=$1
echo $filepath
if [ -d  $filepath ]; then
secondFiles=$(ls $filepath)
#echo $secondFiles
for secondfile in $secondFiles
do

local tempPath=$filepath/$secondfile
if [ -d $tempPath ]; then
getFilename $tempPath
else
echo $tempPath
#iconv -c --verbose  -f gbk -t utf-8 $tempPath -o $tempPath
#mv $tempPath /Users/yujunzhen/Desktop/小说
curl -i http://tp5.com:8888/index/index/uploadbook?bookname="$secondfile" -F "bookfile=@$tempPath"
fi
done

else
echo $1 >> filename.txt
fi
}
getFilename $path

#curl -i http://tp5.com:8888/index/index/hello
#curl -i http://tp5.com:8888/index/index/uploadbook?bookname="都市花盗" -F "bookfile=@都市花盗1.txt"
