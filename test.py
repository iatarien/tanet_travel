################ PRETRAITEMENT ################################################################################
categories = [str(i) for i in range(1,65) ]
classes = pd.Series(list(categories))
#classes = pd.Series(list(classes))
classes = pd.get_dummies(classes)
classes = np.array(classes)
img_width = 320
img_height = 240
def create_data(DIR):
	data = []
	for category in categories :
		class_num = categories.index(category)
		class_num = classes[class_num]
		path = os.path.join(DIR, category)
		i = 0
		for img in os.listdir(path):
			try:
				img_array = cv2.imread(os.path.join(path,img), cv2.IMREAD_GRAYSCALE)
				new_array = cv2.resize(img_array, (img_width, img_height))
				data.append([new_array, class_num])
			except Exception as e:
				print(e)
	return data

training_data = create_data('Training')
test_data = create_data('Test')
random.shuffle(training_data)
random.shuffle(test_data)


X_train = []
y_train = []
X_test = []
y_test = []

for feature,clss in training_data :
	X_train.append(feature)
	y_train.append(clss)
for feature,clss in test_data :
	X_test.append(feature)
	y_test.append(clss)
X_train = np.array(X_train).reshape(-1,img_width, img_height, 1)
X_test = np.array(X_test).reshape(-1,img_width, img_height, 1)


X_train = X_train/255.0
X_test = X_test/255.0
y_test = np.array(y_test)
y_train = np.array(y_train)

X = X_train + X_test
y = y_train + y_test

print(X_train)
print(X)