# -*- coding: utf-8 -*-
"""
Created on Tue Sep 24 19:25:18 2019

@author: user
"""
import csv

file = open('./moon/7_11.csv',encoding = 'utf8')
f= csv.reader(file)

for row in f:
    print(row)

file.close()