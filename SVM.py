# SVM(Support Vector Machine)

# 목적: Kenal SVM 직접 구현

# 1. Hard SVM을 Soft SVM으로 변형: error를 허용! > regularization term 추가
#   - Soft SVM의 Lagrange Primal 문제를 Dual로 치환
#   : QP(2차계획법)이기에, 전역 최적해를 가짐 > (W, b, ξ 에 대하여 미분) = 0 에서 나온 식을 Primal Objective function에 대입, 정리
#   - Hard/Soft SVM의 Dual 식은 동일함 (constraints의 차이)

# 2. Soft SVM식을 Kernel Mapping function을 사용하여, Kernel 생성 (Kernel Trick)
#   - 단순 내적을 활용한 Linear Kernel SVM 구현 = Soft SVM
#   - Gaussian(RBF, Radial Basis Function) Kernel SVM 구현 (non-linear)
#   - Convex Optimization(cvxopt package)를 활용하여 최적 솔루션 획득

# [Remind]
# Soft-margin SVM
# : 2-class clssification problem 에서, max {margin}인 hyperplane 을 찾음
#   - margin 내의 관측치의 존재를 허용
#   목적식 ~ C: hyperparameter > C가 커질수록 마진 폭이 줄어듬
#   제약식 ~ 마진 폭 만큼 줄어들도록 ξ 반영 (non-negative condition ξ >= 0)

# : Lagrange Primal(min) & Dual(max)
#   - Primal의 KKT conditions ~ 미지수로 각각 편미분한 값 = 0 일때 최소값 달성 > Primal을 Dual로
#   - Dual

#   - Dual식을 프로그래밍 언어로 변환하기 위해 'Matrix'형으로 치환
#   : cvxopt solver 사용 > minimization 문제에 특화되어 있기에 변화해줘야 함..

# Kernel SVM
# : Input Space와 Feature Space를 mapping 해주는 함수(Φ)가 중요!
#   - Soft-margin SVM의 Lagrangian Dual 식의 x에 Φ 적용
#   - Kernel K(x1, x2): 선형 변환, 해당하는 표준 행렬 A 정의 > Kernel function 재정의 가능
#   - Mercer's Theorem을 만족하는 Kernel functions
#   1) Linear = Soft-margin SVM
#   2) Gaussian(RBF), hyper-parameter γ 존재

parameters = {}
KERNEL_LINEAR = 1
KERNEL_RBF = 2


def gram_matrix(X, Y, kernel_type, gamma=0.5):
    # gram matrix: 내적 곱 모든 경우에 대한 행렬 표현식
    K = np.zeros((X.shape[0], Y.shape[0]))

    if kernel_type == KERNEL_LINEAR:
        for i, x in enumerate(X):
            for j, y in enumerate(Y):
                K[i, j] = np.dot(x.T, y)

    elif kernel_type == KERNEL_RBF:
        for i, x in enumerate(X):
            for j, y in enumerate(Y):
                K[i, j] = np.exp(-gamma * np.linalg.norm(x - y) ** 2)

    return K

# to cofigure QP with CVXOPT, we will neea following matrices


def train_svm(kernel):
    C = 100
    n, k = X.shape

    y_matrix = y.reshape(1, -1)

    H = np.dot(y_matrix.T, y_matrix) * gram_matrix(X, X, kernel)
    P = matrix(H)
    q = matrix(-np.ones((n, 1)))
    G = matrix(np.vstack((-np.eye((n)), np.eye(n))))
    h = matrix(np.vstack((np.zeros((n, 1)), np.ones((n, 1)) * C)))
    A = matrix(y_matrix)
    b = matrix(np.zeros(1))

    solvers.options['abstol'] = 1e-10
    solvers.options['reltol'] = 1e-10
    solvers.options['feastol'] = 1e-10

    return solvers.qp(P, q, G, h, A, b)

# find the optimal parameters w and b, where is the support vector subset


def get_parameters(alphas):
    # Values greater than zero (some floating point tolerance)
    threshold = 1e-5
    S = (alphas > threshold).reshape(-1, )
    w = np.dot(X.T, alphas * y)
    b = y[S] - np.dot(X[S], w)  # b calculation
    b = np.mean(b)
    return w, b, S


alphas = np.array(svm_parameters['x'])[:, 0]
w, b, S = get_parameters(alphas)
