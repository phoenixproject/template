using System.Collections;
using System.Collections.Generic;
using UnityEngine;

[System.Serializable]
public class GerarObjetos
{
	public GameObject prefab;
	public int contador;
	public float iniciarTempo;
	public float instanciarEsperar;
	public float tempo;
}

public class Instanciador : MonoBehaviour {

	public GerarObjetos objetos;

	public Vector2 instanciarValores;

	// Use this for initialization
	void Start () {

		//Os objetos serão instanciados de acordo com a área de câmera
		instanciarValores = CameraPrincipal.CoordenadaCamera();

		StartCoroutine(InstanciarObjetos());
	}
	
	// Update is called once per frame
	void Update () {
		
	}

	IEnumerator InstanciarObjetos()
	{
		yield return new WaitForSeconds(objetos.iniciarTempo);

		while (true)
		{
			for(int i = 0; i < objetos.contador; i++)
			{
				Vector2 posicao = new Vector2(Random.Range(-instanciarValores.x, instanciarValores.x), instanciarValores.y);
				Instantiate(objetos.prefab, posicao, objetos.prefab.transform.rotation);
				yield return new WaitForSeconds(objetos.instanciarEsperar);
			}

			yield return new WaitForSeconds(objetos.tempo);
		}
	}
}
