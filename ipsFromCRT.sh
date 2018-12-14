#!/bin/bash
i=$1
function help {
        echo Usage:
        echo ./ipsFromCRT.sh %.example.com
        exit
}
if [ "$i" = '-h' ]
then
        help
elif [ "$i" = '--help' ]
then
        help
elif [ -z $i ]
then
        help
fi
echo Running...
function main {
        j=$(echo $i|cut -d"%" -f2)
        for k in $(curl -s https://crt.sh/?q=$i|grep -v '%'|grep $j|cut -d">" -f2|cut -d"<" -f1|tr [:upper:] [:lower:]|sort -u)
        do
                l=$(dig +noall +answer $k)
                m=$(echo $l|cut -d" " -f1|rev|cut -c 2-|rev)
                n=$(echo $l|cut -d" " -f5)
                echo $n $m
        done
}
main|sort -u|column -t -s' '
