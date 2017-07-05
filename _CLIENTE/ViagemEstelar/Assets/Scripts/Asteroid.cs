using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Asteroid : MonoBehaviour {

	[SerializeField]
	private Rigidbody2D rb2d;
	[SerializeField]
	private float maximo;
	[SerializeField]
	private float minimo;
	[SerializeField]
	private float velocidade;
	[SerializeField]
	private int tempoVida;
	[SerializeField]
	private int valorAsteroide;
	[SerializeField]
	private GameObject prefabExplosao1;
	[SerializeField]
	private GameObject prefabExplosao2;


	// Use this for initialization
	void Start()
	{

		Movimentar();
	}

	void Movimentar()
	{
		rb2d.angularVelocity = Random.Range(minimo, maximo);
		rb2d.velocity = -transform.up * velocidade;
	}

	void OnTriggerEnter2D(Collider2D outro)
	{
		PerderVida(outro);
	}

	void PerderVida(Collider2D outro)
	{
		if (outro.tag == "Bomba")
		{
			Instantiate(prefabExplosao1, transform.position, transform.rotation);


			if (tempoVida > 0)
			{

				tempoVida--;
			}

			if (tempoVida <= 0)
			{
				Instantiate(prefabExplosao2, transform.position, transform.rotation);

				Mensagens.pontos += valorAsteroide;

				Destroy(gameObject);

			}
			Destroy(outro.gameObject);

		}

	}
}
