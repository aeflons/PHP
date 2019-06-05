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
#path=$1
#files=$(ls $path)
#echo ${#files[*]}
#
#exit
#for filename in $files
#do
##echo $filename
#if [ -d  $filename ]; then
#secondFiles=$(ls $filename)
##for secondfile in $secondFiles
##do
##echo $secondfile
##done
#
#echo ${secondFiles[0]}
#else
#echo $filename >> filename.txt
#fi
#done

curl -i http://tp5.com:8888/index/index/hello
curl -i http://tp5.com:8888/index/index/uploadbook?bookname="都市花盗" -F "bookfile=@都市花盗1.txt"  
